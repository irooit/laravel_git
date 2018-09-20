<!-- Modal -->
<div class="modal fade text-left" id="{{$id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{$title}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{$url}}" method="POST">
                @csrf
                @isset($method)
                @method($method)
                @endisset
                <div class="modal-body">
                    {{$slot}}
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="取消">
                    <input type="submit" class="btn btn-outline-primary btn-lg" value="确定">
                </div>
            </form>
        </div>
    </div>
</div>
