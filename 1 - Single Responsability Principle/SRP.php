<?php

// Incorrect
// Example of God class with a lot of resposabilities (bussiness, manipulation and exibition of data)

class OrderGodClass
{
	// Manipulate order
	public function calculateTotalSum()
	{
	}
	public function getItems()
	{
	}
	public function getItemCount()
	{
	}
	public function addItem($item)
	{
	}
	public function deleteItem($item)
	{
	}

	// Print order
	public function printOrder()
	{
	}
	public function showOrder()
	{
	}

	// Data management
	public function load()
	{
	}
	public function save()
	{
	}
	public function update()
	{
	}
	public function delete()
	{
	}
}

// Correct
// Classes with single responsability
class Order
{
	public function calculateTotalSum()
	{
	}
	public function getItems()
	{
	}
	public function getItemCount()
	{
	}
	public function addItem($item)
	{
	}
	public function deleteItem($item)
	{
	}
}


class OrderRepository
{
	public function load($orderId)
	{
	}
	public function save($order)
	{
	}
	public function update($order)
	{
	}
	public function delete($order)
	{
	}
}

class OrderViewer
{
	public function printOrder($order)
	{
	}
	public function showOrder($order)
	{
	}
}
