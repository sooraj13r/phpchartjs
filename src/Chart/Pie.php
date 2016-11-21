<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\PieDataSet;
use Halfpastfour\PHPChartJS\Options\PieOptions;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class Pie
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Pie extends Chart implements ChartInterface
{
	const TYPE = 'pie';

	/**
	 * @return PieDataSet
	 */
	public function createDataSet()
	{
		return new PieDataSet();
	}

	/**
	 * @return PieOptions
	 */
	public function options()
	{
		if( is_null( $this->options ) ) {
			$this->options	= new PieOptions( $this );
		}

		return $this->options;
	}

	/**
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		return $renderer->render();
	}
}