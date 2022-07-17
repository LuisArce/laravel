@csrf

<div>
    <label for="title">Título</label>
    <input type="text" name="title" id="" value="{{ old("title", $post->title)}}">
</div>

<div>
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="" value="{{ old("slug", $post->slug)}}">
</div>

<div>
    <label for="category_id">Categorías</label>
    <select name="category_id" id="">
        <option value=""></option>
        @foreach ($categories as $title => $id)
            <option {{ old("category_id", $post->category_id) == $id ? "selected" : ""}} value="{{ $id }}" >{{ $title }}</option>
        @endforeach
    </select>
</div>

<div>
    <label for="posted">Posteado</label>
    <select name="posted" id="">
        <option {{ old("posted", $post->posted) == "no" ? "selected" : ""}} value="no">No</option>
        <option {{ old("posted", $post->posted) == "yes" ? "selected" : ""}} value="yes">Si</option>            
    </select>
</div>

<div>
    <label for="content">Contenido</label>
    <input type="text" name="content" id="" value="{{ old("content", $post->content)}}">
</div>

<div>
    <label for="description">Descripción</label>
    <input type="text" name="description" id="" value="{{ old("description", $post->description)}}">
</div>

@if (isset($task) && $task == 'edit')
    <div>
        <label for="">Imagen</label>
        <input type="file" name="image" id="image">
    </div>
@endif

<button type="submit">Enviar</button>