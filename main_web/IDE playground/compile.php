<?php

	$languageID=$_POST["language"];
        error_reporting(0);


	if($_FILES["file"]["name"]!="")
	{
		include "compilers/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("compilers/c.php");
					break;
				}
				case "cpp":
				{
					include("compilers/cpp.php");
					break;
				}

				case "cpp11":
				{
					include("compilers/cpp11.php");
					break;
				}
				case "java":
					{
						include("compilers/java.php");
						break;
					}
					case "python":
						{
							include("compilers/python.php");
							break;
						}
						case "rust":
							{
								include("compilers/rust.php");
								break;
							}
							case "ruby":
								{
									include("compilers/ruby.php");
									break;
								}
								case "typescript":
									{
										include("compilers/typescript.php");
										break;
									}
									case "php":
										{
											include("compilers/php.php");
											break;
										}

			}
	}
?>


