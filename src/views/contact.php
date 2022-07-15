
    <div class="container"> 
        <h1>Contact page</h1>
        <form method="POST" action="/contact">
            <div class="mb-3">
                <label for="subject" class="form-label">Subject </label>
                <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" name="subject">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Contact</button>
        </form>
    </div>
