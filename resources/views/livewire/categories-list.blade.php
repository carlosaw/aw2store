<div class="categories-area">
  <div class="title">Categorias</div>
  <div class="buttons">
    @foreach ($categories as $category)
      <a href={{ route('ad.list', ['c' => $category->id])}} class="category_button decoration-none">
        <img src="{{$category->icon}}" alt="Ícone Roupas" />
        {{$category->name}}
      </a>
    @endforeach
  </div>
</div>