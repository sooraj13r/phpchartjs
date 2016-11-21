<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\Options;
use Halfpastfour\PHPChartJS\Options\Animation\PieAnimation;

/**
 * Class PieOptions
 * @package Halfpastfour\PHPChartJS\Options
 */
class PieOptions extends Options
{
	/**
	 * @var int
	 */
	private $cutoutPercentage;

	/**
	 * @var float
	 */
	private $rotation;

	/**
	 * @var float
	 */
	private $circumference;

	/**
	 * @return Animation
	 */
	public function animation()
	{
		if( is_null( $this->animation ) ) {
			$this->animation	= new PieAnimation();
		}

		return $this->animation;
	}

	/**
	 * @return int
	 */
	public function getCutoutPercentage()
	{
		return $this->cutoutPercentage;
	}

	/**
	 * @param int $cutoutPercentage
	 *
	 * @return $this
	 */
	public function setCutoutPercentage( $cutoutPercentage )
	{
		$this->cutoutPercentage = $cutoutPercentage;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getRotation()
	{
		return $this->rotation;
	}

	/**
	 * @param float $rotation
	 *
	 * @return $this
	 */
	public function setRotation( $rotation )
	{
		$this->rotation = $rotation;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getCircumference()
	{
		return $this->circumference;
	}

	/**
	 * @param float $circumference
	 *
	 * @return $this
	 */
	public function setCircumference( $circumference )
	{
		$this->circumference = $circumference;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= parent::getArrayCopy();

		if( !is_null( $this->cutoutPercentage ) ) $data['cutoutPercentage'] = $this->getCutoutPercentage();
		if( !is_null( $this->rotation ) ) $data['rotation'] = $this->getRotation();
		if( !is_null( $this->circumference ) ) $data['circumference'] = $this->getCircumference();

		return $data;
	}
}