@extends ('backend.layouts.app')

@section ('title', trans('strings.backend.manage-blog'))

@section('after-styles')
    
@endsection

@section('page-header')
    <h1>
        {{trans('strings.backend.manage-blog')}}
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-body">
            
            {{ Form::open(['route' => 'admin.pages.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post','enctype'=>"multipart/form-data"]) }}
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('title', trans('strings.backend.title'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'autocomplete' => 'off', 'required' => 'required', 'autofocus' => 'autofocus']) }}
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('slug', trans('strings.backend.permalink'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">{{config('app.url')}}</span>
                                    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'permalink', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus']) }}
                                </div>
                                <span class="text-danger">
                                    <i class="fa fa-warning"></i>
                                    {!!trans('strings.backend.set-same-permalink')!!}
                                </span>
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('type', trans('strings.backend.type'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                {{ Form::select('type', array('article' => trans('strings.backend.article'), 'page' => trans('strings.backend.page')), 'article', ['class' => 'form-control']) }}
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                                {{-- rith  --}}
                                    <div class="form-group">
                                         <label for="blogType" class="col-lg-2 control-label">Blog Type</label>
                                            <div class="col-lg-10">
                                                    <select class="form-control" name="blogType">
                                                        <option value="0">Free</option>
                                                        <option value="1">Premium</option>
                                                          
                                                    </select>
                                            </div>
                                    </div>
                            {{-- end rith --}}
                        <div class="form-group">
                            {{ Form::label('blog_category_id', trans('strings.backend.category'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                {{ Form::select('blog_category_id', $postCategories, null, ['class' => 'form-control']) }}
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        
                        <div class="form-group">
                            {{ Form::label('lang', trans('strings.backend.language'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <img src="/images/flags/{{app()->getLocale()}}.svg" class="flag" style="width:20px;"/>    
                                    </span>
                                    <select name="lang" class="form-control language">
                                        @foreach($languages as $key => $lang)
                                            <option value="{{$key}}" {!! $key==app()->getLocale() ? 'selected="selected"' : '' !!}>{{$lang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('body', trans('strings.backend.body'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                <textarea id="my-editor" name="body" class="form-control">{!! old('body', '') !!}</textarea>
                                {{-- Form::textarea('body', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus']) --}}
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        {{-- rith  --}}
                        <div class="form-group">
                            <label for="thumnail" class="col-lg-2 control-label">Image Thumnail</label>
                               <div class="col-lg-10">
                                    <div class="mail-img-preview">
                                        <button type="button"  id="remove" class="btn-remove-image" onclick="defaultImage();">X</button>
                                        <img id="image-preview" width="100%" src="" alt="your image" />
                                    </div>
                                    <input type="file" id="file-thumbnail" name="file" style="display: none">
                               </div>
                       </div>
                        {{-- end rith --}}
                        <div class="form-group">
                            {{ Form::label('published', trans('strings.backend.published'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-1">
                                {{ Form::checkbox('published', '1', false) }}
                            </div><!--col-lg-1-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('display_main_menu', trans('strings.backend.display-main-menu'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-1">
                                {{ Form::checkbox('display_main_menu', '1', true) }}
                            </div><!--col-lg-1-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('display_footer', trans('strings.backend.display-footer'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-1">
                                {{ Form::checkbox('display_footer', '1', true) }}
                            </div><!--col-lg-1-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('featured_frontend', trans('strings.backend.featured-frontend'), ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-1">
                                {{ Form::checkbox('featured_frontend', '1', false) }}
                            </div><!--col-lg-1-->
                        </div><!--form control-->
                        
                        
                        
                    </div><!-- /.box-body -->

                <div class="box box-info">
                    <div class="box-body">
                        <div class="pull-left">
                            {{ link_to_route('admin.pages.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        </div><!--pull-left-->
        
                        <div class="pull-right">
                            {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-md']) }}
                        </div><!--pull-right-->
        
                        <div class="clearfix"></div>
                    </div><!-- /.box-body -->
                </div><!--box-->
        
            {{ Form::close() }}
            
        </div><!-- /.box-body -->
    </div><!--box-->

@endsection

@section('after-scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        var options = {
            
        };
        
        var config = {
    		codeSnippet_theme: 'Monokai',
    		language: '{{ config('app.locale') }}',
    		height: 300,
    		filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/filemanager?type=Files',
            filebrowserUploadUrl: '/filemanager/upload?type=Files&_token=',
    		// toolbarGroups: [
    		// 	{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
    		// 	{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
    		// 	{ name: 'links' },
    		// 	{ name: 'insert' },
    		// 	{ name: 'forms' },
    		// 	{ name: 'tools' },
    		// 	{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
    		// 	{ name: 'others' },
    		// 	//'/',
    		// 	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    		// 	{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
    		// 	{ name: 'styles' },
    		// 	{ name: 'colors' }
    		// ]
    	};  
    	
        CKEDITOR.replace('my-editor',config);
        
        // language switcher
        $('.language').on('change', function(){
            $('.flag').attr('src', '/images/flags/'+$('.language').val()+'.svg');
        })
        
	
        $("#title").keyup(function(){
			var str = sansAccent($(this).val());
			str = str.replace(/[^a-zA-Z0-9\s]/g,"");
			str = str.toLowerCase();
			str = str.replace(/\s/g,'-');
			$("#permalink").val(str);        
		});
		
		w = "àâäçéèêëîïôöùûüÿÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸ".split("");
        w.push("Œ","œ");
        wo = "aaaceeeeiioouuuyAAACEEEEIIOOUUUY".split("");
        wo.push("OE","oe");
		function sansAccent(text){
          for(var i=0 ; i< w.length ; i++){
            text = text.replace( new RegExp(w[i],"g") , wo[i]);
          }
          return text;
        }

        $(document).ready(function(){
            defaultImage();
            $('#image-preview').click(function(){
                $("#file-thumbnail").click();
            });
        });
        function defaultImage(){
                $("#remove").css("display","none");
                $("#image-preview").attr("src",'/storage/thumbnail/image_default.jpg');
            }
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#file-thumbnail").change(function () {
            $("#remove").css("display","");
            readURL(this);
        });
    </script>
    
@endsection
