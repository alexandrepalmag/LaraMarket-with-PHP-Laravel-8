<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <title>LaraMarket</title>
</head>

<body>

    <div class="container">

        @if (session('msg'))
            <div class="alert"
                style="position:absolute; margin-left:28%; width: 30%; margin-top: 5%; background: rgba(92, 184, 92, 0.2); text-align:center;"
                id="alertFade" role="alert">
                <strong>{{ session('msg') }}</strong>
            </div>

        @endif

        @yield('content')
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#tableStore').DataTable({
            "lengthMenu": [
                [8, 10, 25, 50, 100, -1],
                [8, 10, 25, 50, 100, "All"]
            ]
        });

        /* setTimeout(function(){ 
                let msg = document.getElementById("alertFade");
                msg.parentNode.removeChild(msg);   
            }, 5000);
 */
        setTimeout(() => {

            if (document.getElementById("alertFade") !== null) {

                document.getElementById("alertFade").remove();

            }

        }, 2280);

    });
</script>

</html>
