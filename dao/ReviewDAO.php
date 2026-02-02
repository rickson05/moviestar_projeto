<?php

require_once(__DIR__ . "models/Review.php");

class ReviewDao implements ReviewDAOInterface {

    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function buildReview($data) {
        $reviewObject = new Review();
        $reviewObject->id = $data["id"];
        $reviewObject->rating = $data["rating"];
        $reviewObject->review = $data["review"];
        $reviewObject->users_id = $data["users_id"];
        $reviewObject->movies_id = $data["movies_id"];
        return $reviewObject;
    }

    public function create(Review $review) {
        // Adiciona uma nova review
    }

    public function getMoviesReview($id) {
        // Retorna todas as reviews de um filme
    }

    public function hasAlreadyReviewed($id, $userId) {
        // Verifica se o usuário já fez review desse filme
    }

    public function getRatings($id) {
        // Calcula a média das avaliações de um filme
    }
}
