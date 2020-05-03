<style type="text/css">
			body
				{
					margin: 0px;
					padding: 0px;
					font-family: sans-serif;
				}
				.header
				{
					background-image: linear-gradient(-90deg, pink, blue);
					height: 200px;
				}

				.header #name
				{
					margin: 0;
					padding-top:50px;
					padding-bottom:20px;
					text-align: center;
					font-size: 40px;
				}

				.header .image
				{

					display: flex;
					justify-content: center;
					align-items: center;
					height: 200px;

				}

				.header #job
				{
					margin: 12px;
					margin-top: 20px;
					padding: 12px;
					text-align: center;
					font-size: 40px;
					color: gray;
				}
				.main
				{
					margin: 30px;
					margin-top: 200px;
				}

				.main .about_desc
				{
					margin: 0px;
					padding: 30px;
					border: 5px solid black;
					border-radius: 20px;
				}
				.main .about_desc p
				{
					font-size: 20px;
				}
				.main .post_desc
				{
					margin: 0px;
					padding: 10px;
					border: 5px solid black;
					border-radius: 20px;
				}

				.main .post_desc p
				{
					margin-top: 40px;
					margin-bottom: 40px;
					margin-left: 20px;
					font-size: 40px;

				}

				.main .post_desc .cont1
				{
					margin: 0;
					padding: 0;
					width: 120px;
					float: right;
				}

				.main .post_desc .cont2
				{
					margin: 0;
					padding: 0;
					width: 150px;
					float: right;
				}
				.main .about_desc #more
				{
					display: none;
				}

				button
				{
					float: right;
					border: none;
					outline: none;
					font-size: 20px;
					color: blue;
					background-color: white;
				}
				.main .expertise
				{
					margin: 20px;
					cursor: pointer;
				}
				.main .expertise:hover
				{
					color: blue;
					
				}
				.form
				{
					width: 100%;
					height: 200%;
					background-color: blue;
					display: flex;
					position: absolute;
					top: 0;
					justify-content: center;
					align-content: center;
					display:none;
				}
				.form-content
				{
					width: 500px;
					height: 520px;
					background-color: white;
					border-radius: 4px;
					padding: 20px;
					margin: 100px auto;

				}
				.form .form-content input
				{
					width: 30%;
	/*				display: block;*/
					margin: 15px auto;

				}
				#btn2
				{
					text-align: center;
					float: right;
					font-size: 20px;
					background-color: cadetblue;
				}
				#btn2:hover
				{
					background-color: firebrick;
					color: white;
				}
				#btn1
				{
					font-size: 20px;
					background-color: cadetblue;
				}
				#btn1:hover
				{
					background-color: firebrick;
					color: white;
				}
</style>