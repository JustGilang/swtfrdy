<?php 
include 'config/koneksi.php';
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  
        h1{
            font-size: 30px;
            color: black;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }
        table{
            width:100%;
            table-layout: fixed;
        }
        .tbl-header{
            background-color: rgba(89, 89, 89, 0.21);
        }
        .tbl-content{
            height:260px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid white;
        }
        th{
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: black;
            text-transform: uppercase;
        }
        td{
            padding: 15px;
            text-align: left;
            vertical-align:middle;
            font-weight: 300;
            font-size: 12px;
            color: black;
            border-bottom: solid 1px rgba(87, 40, 40, 0.37);
        }
        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        body{
            font-family: 'Roboto', sans-serif;
        }
        section{
            margin: 35px;
        }

        /* follow me template */
        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;    
        }
        .made-with-love i {
            font-style: normal;
            color: #F50057;
            font-size: 14px;
            position: relative;
            top: 2px;   
        }
        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }
        .made-with-love a:hover {
            text-decoration: underline;
        }

        /* for custom scrollbar for webkit browser*/

        ::-webkit-scrollbar {
            width: 6px;
        } 
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        } 
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        }
    </style>
</head>
<body>
    <section>
        <!--for demo wrap-->
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Harga Satuan</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Opsi</th>
                </tr>
            </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>BRG001</td>
                        <td>Kaos Keren</td>
                        <td>Warna Kuning size M</td>
                        <td>100.000</td>
                        <td>2</td>
                        <td>200.000</td>
                        <td>
                        <a href="#" class="btn btn-danger btn-sm" title="Hapus">
                            hapus
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BRG001</td>
                        <td>Kaos Keren</td>
                        <td>Warna Kuning size M</td>
                        <td>100.000</td>
                        <td>2</td>
                        <td>200.000</td>
                        <td>
                        <a href="#" class="btn btn-danger btn-sm" title="Hapus">
                            hapus
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BRG001</td>
                        <td>Kaos Keren</td>
                        <td>Warna Kuning size M</td>
                        <td>100.000</td>
                        <td>2</td>
                        <td>200.000</td>
                        <td>
                        <a href="#" class="btn btn-danger btn-sm" title="Hapus">
                            hapus
                        </a>
                        </td>
                    </tr>
                    <tr class="tbl-header">
                        <td colspan="6">Total</td>
                        <td>200.000</td>
                        <td>
                        <a href="#" class="btn btn-success btn-sm">
                            Checkout
                        </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script>
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();
    </script>
</body>
</html>