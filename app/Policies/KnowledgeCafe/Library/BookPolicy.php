<?php

namespace App\Policies\KnowledgeCafe\Library;

use App\User;
use App\Models\KnowledgeCafe\Library\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the book.
     *
     * @param  \App\User  $user
     * @param  \App\Models\KnowledgeCafe\Library\Book  $book
     * @return mixed
     */
    public function view(User $user, Book $book)
    {
        return $user->hasPermissionTo('library_books.view');
    }

    /**
     * Determine whether the user can create books.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('library_books.create');
    }

    /**
     * Determine whether the user can update the book.
     *
     * @param  \App\User  $user
     * @param  \App\Models\KnowledgeCafe\Library\Book  $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        return $user->hasPermissionTo('library_books.update');
    }

    /**
     * Determine whether the user can delete the book.
     *
     * @param  \App\User  $user
     * @param  \App\Models\KnowledgeCafe\Library\Book  $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        return $user->hasPermissionTo('library_books.delete');
    }

    /**
     * Determine whether the user can list books.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function list(User $user)
    {
        return $user->hasPermissionTo('library_books.view');
    }

    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('library_books.view');
    }
}
