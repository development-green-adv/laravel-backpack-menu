@if ($crud->hasAccess('update'))
    <a href="{{ url(route('crud.item.index').'/'.$entry->getKey().'/edit?menu='.request('menu')) }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> {{ trans('backpack::crud.edit') }}</a>
@endif