<?php

namespace App\Repositories\Book;

use App\DTO\Book\AddImageDTO;
use App\DTO\Book\AddDetailsDTO;
use App\DTO\Book\UpdateBookDTO;
use App\DTO\Book\UpdateImageDTO;
use App\Enums\ImageStatusEnum;
use App\Enums\LanguagesEnum;
use App\Models\BookImage;
use App\Models\BookDetails;
use stdClass;

interface IBookRepositoryInterface
{
    // Books
    public function find(int $id);
    public function findAll();
    public function create();
    public function destroy(int $id);

    // Localizations
    public function findLocalization(int $id);
    public function addLocalization(AddDetailsDTO $dto);
    public function update(BookDetails $localization, UpdateBookDTO $dto);

    // Images
    public function addImage(AddImageDTO $dto, ?ImageStatusEnum $status);
    public function updateImage(BookImage $image, UpdateImageDTO $dto);
    public function findImage(int $id);
    public function findImagesByBook(int $detail_id);
    public function deleteImage(int $id);
}