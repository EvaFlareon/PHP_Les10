<?php

// Домашнее задание к лекции 3.2 «Наследование и интерфейсы»

// 1. Распишите своё понимание полиморфизма и наследования своими словами. Представьте, что вас спрашивают на собеседовании.

// Под полиморфизмом можно подразумевать обработку одним методом разных типов данных или использование одним классом разные методы. Наследование заключается в передаче свойств и методов от роидтельского класса дочернему.

// 2. Своими словами распишите отличие интерфейсов и абстрактных классов. В чём отличие? Когда лучше использовать одно, когда другое?

// В интерфейсах есть только сигнатуры методов, когда в абстрактных классах прописана и их реализация. 

// 3., 4. Для всех объектов, которые вы делали в прошлом ДЗ, придумайте, что могло бы быть суперклассом? (Необходимо написать код). Создайте интерфейсы для всех объектов, которые у вас были, и имплементируйте их.

class ParentClass
{
	public $title;

	public function getPrintClass()
	{	
		echo $this->title.'<br>';
		foreach ($this as $key => $item) {
			echo "{$key} => {$item}<br>";
		}
		echo '<hr>';
	}
}

interface CarsInterface
{
	public function startCar();
	public function stoptCar();
}

interface TvInterface
{
	public function onTelevision();
	public function offTelevision();
}

interface PenInterface
{
	public function writePen($wrieString);
}

interface DuckInterface
{
	public function flyDuck();
}

interface ProductInterface
{
	public function newPrice($discount);
}

class Cars extends ParentClass implements CarsInterface
{
	public $brand = 'Lada';
	public $model;
	public $color;

	public function __construct($title, $model, $color)
	{
		$this->title = $title;
		$this->model = $model;
		$this->color = $color;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function startCar()
	{
		echo 'Поехали!<br><hr>';
	}

	public function stoptCar()
	{
		echo 'Остановились<br><hr>';
	}
}

$car1 = new Cars('Машина1', '1401', 'White');

$car2 = new Cars('Машина2', 'Malina', 'Orange');



class Television extends ParentClass implements TvInterface
{
	public $brand;
	public $model;

	public function __construct($title, $brand, $model)
	{
		$this->title = $title;
		$this->brand = $brand;
		$this->model = $model;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function onTelevision()
	{
		echo 'Включили телевизор<br><hr>';
	}

	public function offTelevision()
	{
		echo 'Выключили телевизор<br><hr>';
	}
}

$tv1 = new Television('Телевизор1', 'LG', '55LJ622V');

$tv2 = new Television('Телевизор2', 'Samsung', '"32" FHD Flat TV UE32J5100K Series 5');


class BallpointPen extends ParentClass implements PenInterface
{
	public $manufacturer;
	public $inkColor;

	public function __construct($title, $manufacturer, $inkColor)
	{
		$this->title = $title;
		$this->manufacturer = $manufacturer;
		$this->inkColor = $inkColor;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function writePen($wrieString)
	{
		echo 'Вы написали: "'.$wrieString.'"<br><hr>';
	}
}

$pen1 = new BallpointPen('Шариковая ручка1', 'Attache', 'Blue');

$pen2 = new BallpointPen('Шариковая ручка2', 'ErichKrause', 'Black');


class Duck extends ParentClass implements DuckInterface
{
	public $species;
	public $habitat;

	public function __construct($title, $species, $habitat)
	{
		$this->title = $title;
		$this->species = $species;
		$this->habitat = $habitat;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function flyDuck()
	{
		echo $this->species.' полетела<br><hr>';
	}
}

$duck1 = new Duck('Утка1', 'Мандаринка', 'Восточная Азия');

$duck2 = new Duck('Утка1', 'Кряква', 'Кряква широко распространена в северном полушарии');


class Goods extends ParentClass implements ProductInterface
{
	public $name;
	public $category;
	public $price;

	public function __construct($title, $name, $category, $price)
	{
		$this->title = $title;
		$this->name = $name;
		$this->category = $category;
		$this->price = $price;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function newPrice($discount)
	{
		echo 'Цена со скидкой согла бы составлять '.round($this->price - ($this->price / 100 * $discount)).' рублей<br><hr>';
	}
}

$product1 = new Goods('Товар1', 'Война и мир', 'Книги', 1500);

$product2 = new Goods('Товар2', 'Ежедневник', 'Канцелярские принадлежности', 400);


$car1->getPrintClass();
$car2->getPrintClass();
$car1->startCar();
$car2->stoptCar();

$tv1->getPrintClass();
$tv2->getPrintClass();
$tv1->onTelevision();
$tv2->offTelevision();

$pen1->getPrintClass();
$pen2->getPrintClass();
$pen1->writePen('Привет');

$duck1->getPrintClass();
$duck2->getPrintClass();
$duck1->flyDuck();
$duck2->flyDuck();

$product1->getPrintClass();
$product2->getPrintClass();
$product1->newPrice(5);

?>
