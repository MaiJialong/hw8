class PostModel {
    public $id;
    public $title;
    public $content;
    
    // create a new Post
    public function create($title, $content) {
        $query = "INSERT INTO posts (title, content) VALUES (:title, :content)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }

    //search Posts
    public function search($title) {
        $query = "SELECT * FROM posts WHERE title LIKE :title";
        $stmt = $db->prepare($query);
        $title = "%" . $title . "%";
        $stmt->bindParam(':title', $title);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
