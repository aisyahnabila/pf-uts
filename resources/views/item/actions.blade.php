<div class="d-flex">
    <a href="{{ route('items.show', ['item' => $barangs->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi bi-filter-left"></i></a>
    <a href="{{ route('items.edit', ['item' => $barangs->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('items.destroy', ['item' => $barangs->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
