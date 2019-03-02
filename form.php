
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Toko </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jumbotron -->
	<div class="jumbotron text-center">
		
		<h1>Masukan Kategori</h1>
		
	</div>
	<!-- akhir jumbotron -->

	<!-- data tabel -->
	<section class="data">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="form.php" method="post" name="form1">
                    <table class="table">
                    
                        <tr>
                            <td>Id</td>
                            <td>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </td>                            
                        </tr>
                        <tr>
                            <td>Category Name</td>
                            <td>Peralatan Mandi</td>
                        </tr>
                        <tr>
                            <td>Product</td>
                            <td><input type="text" name="product" /></td>
                        </tr>
                    </table>
                </form>
			</div>
            <div class="col-sm-12">
                <input type="submit" name="Submit" value="Simpan" />
            </div>
		</div>
	</div>
	</section>
	
	<!-- akhir data tabel -->
	
    <?php
        if (isset($_POST['Submit'])) {
            $name = $_POST['product'];
        

        // include_once(libnotujuh.php);

        $result = query("INSERT INTO products(product) VALUES('$name')");

        echo "File berhasil ditambahkan. <a href='tujuh.php'>Kembali</a> ";

    }

    ?>



	<!-- footer -->
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; built with Hamdan Hamdani</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- akhir footer -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>