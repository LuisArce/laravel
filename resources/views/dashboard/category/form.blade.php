@csrf

<div>
    <label for="title">Título</label>
    <input type="text" name="title" id="" value="{{ old("title", $category->title)}}">
</div>

<div>
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="" value="{{ old("slug", $category->slug)}}">
</div>

<button type="submit">Enviar</button>