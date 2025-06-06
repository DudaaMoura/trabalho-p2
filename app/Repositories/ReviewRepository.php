<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    public function all()
    {
        return Review::all();
    }

    public function find($id)
    {
        return Review::find($id);
    }

    public function create(array $data)
    {
        return Review::create($data);
    }

    public function update($id, array $data)
    {
        $review = Review::find($id); // Procura o review pelo ID
        // Se o review não for encontrado, retorna null
        if ($review) {
            $review->update($data);
        }
        return $review;
    }

    public function delete($id) // Deleta o review pelo ID
    {
        $review = Review::find($id);
        if ($review) {
            $review->delete();
        }
        return $review;
    }
}