<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Tracker</title>
</head>
<body>
    <h1>Issue Tracker</h1>
    
    <!-- Form to add new issue -->
    <form action="{{ route('issues.store') }}" method="POST">
        @csrf
        <label for="issue_text">Issue:</label>
        <input type="text" name="issue_text" required>
        <button type="submit">Add Issue</button>
    </form>
    
    <h2>All Issues</h2>
    <ul>
        @foreach ($issues as $issue)
            <li>
                {{ $issue->issue_text }}
                <form action="{{ route('issues.update', $issue->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('PATCH')
                    <label>
                        <input type="checkbox" name="resolved" {{ $issue->resolved ? 'checked' : '' }} onchange="this.form.submit()">
                        Resolved
                    </label>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
