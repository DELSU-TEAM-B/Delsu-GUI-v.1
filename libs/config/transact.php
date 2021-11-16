<?php 
    class Querydb extends Dbh{
        public $news_id;
        public $news_title;
        public $news_body;
        public $news_featured_image;
        public $news_author;
        public $news_date;

        public function isNews(){
            $sql = "SELECT * FROM delsu_news WHERE deleted = '0'";
            $stmt = $this->connect()->prepare($sql);
            $stmt -> execute();
            $numberofrows = $stmt->rowCount();
            if($numberofrows > 0){
                return true;
            }
        }
        public function getAllNews($limit){
            $sql = "SELECT * FROM delsu_news WHERE deleted = '0' LIMIT $limit ";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch()){
                echo '<li><a href="news?id='.$row['n_id'].'">'.$row['news_title'].'</a></li>';
            } 
        }
        public function getNews($news_id){
            $sql = "SELECT * FROM delsu_news WHERE n_id = '$news_id' ";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch()){
                echo '<img src="libs/img/news/'.$row['featured_image'].'" alt="" class="img-fluid img-thumbnail mb-3">
                        <div class="mb-3">
                            Date : '.date("l, d-M-Y", strtotime($row['date'])).' 
                        </div>
                        <div class="pt-2 mb-2"><p>'.$row['news_body'].'</p></div>
                        ';
            } 
        }
    }