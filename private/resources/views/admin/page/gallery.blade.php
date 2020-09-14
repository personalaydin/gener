@extends('admin.template.master')

@include('admin.template.components.datatable')

@section('content')

    @include('admin.template.components.buttons.page-index')

    @component('admin.template.components.multiple-file-upload', ['enableEditModals' => true])
        @slot('popup')
            @foreach($row->gallery as $galleryItem)
                @component('admin.template.components.modal')
                    @slot('id', 'edit-modal-'.$galleryItem->id)
                    @slot('title', 'Galeri görselini düzenle')
                    @slot('body')
                        <form class="validate-form" action="{{ route('admin.'.$row->modelMeta['name'].'.gallery-update', $galleryItem) }}" method="post" enctype="multipart/form-data">
                            {{ method_field('PUT') }}

                            @component('admin.template.partials.translation-tabs', [
                                'id' => $galleryItem->id
                            ])

                                @slot('content')
                                    @foreach (config('app.locales') as $lang => $langMeta)
                                        <div class="tab-pane @if ($loop->first) active @endif" id="tab_{{ $galleryItem->id }}_{{ $lang }}">
                                            @include('admin.template.components.form.text', [
                                                'row' => $galleryItem,
                                                'locale' => $lang,
                                                'name' => 'title',
                                                'label' => 'Başlık',
                                            ])

                                            @include('admin.template.components.form.textarea', [
                                                'row' => $galleryItem,
                                                'locale' => $lang,
                                                'name' => 'excerpt',
                                                'label' => 'Açıklama',
                                            ])
                                        </div>
                                    @endforeach
                                @endslot

                            @endcomponent

                            @include('admin.template.components.form.save')
                        </form>
                    @endslot
                @endcomponent
            @endforeach
        @endslot
    @endcomponent

@endsection
