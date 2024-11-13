class PostController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function createPost($title, $content) {
        // input validation
        if (empty($title) || strlen($title) < 3) {
            return "Title must have at least 3 characters.";
        }
        if (empty($content) || strlen($content) < 10) {
            return "Content must have at least 10 characters.";
        }
        
        //create the new Post
        $this->model->create($title, $content);
        return "Post created successfully.";
    }

    public function searchPosts($title) {
        // searchPosts
        return $this->model->search($title);
    }
}
