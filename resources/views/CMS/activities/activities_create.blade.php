<style>
    @import url("../../../css/form.css");
</style>

<div class="container">
    <form class="form" method="POST" action="/CMS/activities/store">
        @csrf
        <div class="title">
            <p>Form add new activity</p>
        </div>
        <input type="text" name="actName" placeholder="Enter activity name" class="input" required>
        <input type="text" name="actImg" class="input" placeholder="Enter activity image url" required>
        <button type="submit" class="button-submit">Submit</button>
        <a class="button-back" href="/CMS/activities/">Go to Homepage</a>
    </form>
</div>