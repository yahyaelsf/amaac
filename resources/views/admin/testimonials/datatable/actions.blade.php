@can('testimonials-store')
<a type="button" href="{{ route('admin.testimonials.create', ['id' => $row->getKey()]) }}"
   class="btn btn-icon btn-success btn-sm text-white">
    <i class="fa-solid fa-pen-to-square"></i>
</a>
@endcan


{{-- @can('question-store')
    <a href="{{ route('admin.hospitals.replicate', $row->getKey()) }}" type="button" class="btn btn-icon btn-info btn-sm text-white">
        <i class="la la-clone"></i>
    </a>
@endcan --}}


@can('testimonials-delete')
    <a type="button" onclick="deleteItem({{ $row->getKey() }})" class="btn btn-icon btn-danger btn-sm text-white">

        <i class="fa-solid fa-trash-can"></i>
    </a>
@endcan

