
<form method = "post" action ={{url('/test')}}>
    {{csrf_field()}}

    <input type = "text" name = "testing">
    <button type="submit" class="btn">Generate Password</button>
</form>
