<style>
    @import url("../../../css/form.css");
</style>

<div class="container">
    <form class="form" method="POST" action="/CMS/activities/update/{{ $act->actID }}">
        @method('PATCH')
        @csrf
        <div class="title">
            <p>Update Activity Information</p>
        </div>
        <input type="text" name="actName" value="{{ $act->actName }}" class="input" required>
        <input type="text" name="actImg" value="{{ $act->actImg }}" class="input" required>
        <button type="submit" class="button-submit">Submit</button>
        <a class="button-back" href="/CMS/activities/">Go to Homepage</a>
    </form>
</div>