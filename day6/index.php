<?php

namespace First
{
	class Test 
	{
		public function __construct()
		{
			echo "class test 1";
		}
	}
}

namespace Second{
	class Test 
	{
		public function __construct()
		{
			echo "class test 2";
		}	
	}

}

namespace {
	use Second\Test;
	use First\Test as FTest;
	(new FTest);
	(new Test);
}




