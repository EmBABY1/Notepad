<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Table Layout</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <form action="store" method="post">
            @csrf
            <table>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" id="title"></td>
                </tr>
                <tr>
                    <td>Notes</td>
                    <td>
                        <textarea name="notepad" id="notepad"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Confirm</button>
                        <a href="/mynotes" class="link-button">My Notes</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 8px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }

    button,
    .link-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    button:hover,
    .link-button:hover {
        background-color: #0056b3;
    }

    .link-button {
        background: none;
        border: none;
        color: #007bff;
        cursor: pointer;
    }

    .link-button:hover {
        color: black;
    }
</style>
