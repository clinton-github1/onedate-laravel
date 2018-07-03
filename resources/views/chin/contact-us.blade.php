@extends('layouts/chin.header')

@section('content')
<div class="content">
<h1>聯絡我們</h1>
<p>在下面表格填入資料，送給我們您的意見</p>

<div class="contact-form">
    
        <form action="{!! url('contact') !!}" method="post">
            
            {{ csrf_field() }}
            
            
             @if (session()->has('message'))
             <h3>{{ session('message') }}</h3>
             @endif
            
             @if (session()->has('failed'))
             <h3>{{ session('failed') }}</h3>
             @endif
            
            <label for="name">姓名: </label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">電子郵件:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}"  required><br>
            <label for="message">留言內容:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required>{{ old('Message') }}</textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="傳送電子郵件">
        
        </form>
    
    </div>
    
</div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection
