<div>
    <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">Tambah Post</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td class="text-center">
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        <button wire:click="destroy({{ $post->id }})" class="btn btn-sm btn-danger">DELETE</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
