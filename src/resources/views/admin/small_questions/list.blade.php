@extends('layouts.app')

@section('title', '設問一覧')


@section('content')
    <form action="" method="post">
    @csrf
      <div class="list">
        <div class="list_labels">
          <div class="list_labels--left">クイズ名</div>
          <div class="list_labels--right">操作</div>
        </div>
        <div class="sortable">
        @foreach ($questions as $question)
          <div class="list_content" id="{{ $question->id }}">
            <div class="list_quiz--big">
              <h1>問題：{{ $loop->iteration }}</h1>
              <img src="/images/{{ $question->image }}" alt="">
            </div>
              <div class="list_actions--big">
                  <a href="/admin/choices/{{ $question->id }}">設問の選択肢を編集</a>
                  <a href="/admin/small_questions/edit/{{ $question->id }}">設問を編集</a>
                  <a href="/admin/small_questions/delete/{{ $question->id }}">設問を削除</a>
              </div>
          </div>
        @endforeach
        </div>
        <input type="hidden" id="list-ids" name="list-ids" />
      </div>
      <div class="list_add">
        <a href="/admin/small_questions/{{ $big_question->id }}/add">＋設問を追加</a>
        <a href="/admin/big_questions">大問の一覧に戻る</a>
        <button id="submit">並び替えを更新</button>
      </div>
    </form>
@endsection

@section('script')
<script src="{{ asset('js/sort.js') }}"></script>
@endsection 


