<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>

    <style>
        body{
            font-family: Arial;
            padding: 20px;
        }

        .job{
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1>Job Listings</h1>

@foreach($jobs as $job)

<div class="job">

    <h2>{{ $job->title }}</h2>

    <p>
        <strong>Description:</strong>
        {{ $job->description }}
    </p>

    <p>
        <strong>Company:</strong>
        {{ $job->company }}
    </p>

    <p>
        <strong>Location:</strong>
        {{ $job->location }}
    </p>

    <p>
        <strong>Salary:</strong>
        ₱{{ $job->salary }}
    </p>

</div>

@endforeach

</body>
</html>