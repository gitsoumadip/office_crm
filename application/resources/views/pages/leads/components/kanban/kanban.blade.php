{{-- {{ @count($leads)}}
{{ url('leads/update-position') }} --}}
{{-- <div class="boards count-{{ ($leads ?? '') }} js-trigger-leads-kanban-board" id="leads-view-wrapper" data-position="{{ url('leads/update-position') }}"> --}}
<div class="boards count- js-trigger-leads-kanban-board" id="leads-view-wrapper" data-position="{{ url('leads/update-position') }}">
    <!--each board-->
    @foreach($boards as $board)
    <!--board-->
    @include('pages.leads.components.kanban.board')
    @endforeach
</div>