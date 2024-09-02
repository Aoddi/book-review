@extends('layouts.app')

@section('content')
<h1 class="mb-10 text-2xl">Новый отзыв для {{ $book->title }}</h1>

<form action="{{ route('books.reviews.store', $book) }}" method="POST">
    @csrf
    <label for="review">Отзыв</label>
    <textarea name="review" id="review" class="input mb-4" required></textarea>

    <label for="rating">Рейтинг</label>
    <select name="rating" id="rating" class="input mb-4" required>
        <option value="">Выберите рейтинг</option>
        @for($i = 1; $i <= 5; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>

    <button type="submit" class="btn">Добавить отзыв</button>
</form>
@endsection
