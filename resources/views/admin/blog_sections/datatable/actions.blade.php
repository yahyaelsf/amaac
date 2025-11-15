@can('blog-sections-store')
<a type="button" href="{{ route('admin.blog-sections.create', ['id' => $row->getKey()]) }}"
   class="btn btn-icon btn-success btn-sm text-white">
    <i class="fa-solid fa-pen-to-square"></i>
</a>
@endcan
@can('blog-sections-delete')
    <a type="button" onclick="deleteItem({{ $row->getKey() }})" class="btn btn-icon btn-danger btn-sm text-white">

        <i class="fa-solid fa-trash-can"></i>
    </a>
@endcan

