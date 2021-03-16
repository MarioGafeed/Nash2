@php
    $relation = \Spatie\Permission\Models\Role::find($id);
    if ($relation) {
        echo str_split(str_replace(array('[',']','"'),' ', $relation->permissions()->pluck('name')), 60)[0] . '...';
    }else {
        echo "Error";
    }
@endphp
