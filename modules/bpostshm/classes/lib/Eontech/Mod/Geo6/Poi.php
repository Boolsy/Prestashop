<?php
/**
 * Geo6 class
 *
 * @author    Serge Jamasb <serge@stigmi.eu>
 * @version   3.3.9
 * @copyright Copyright (c), Eontech.net. All rights reserved.
 * @license   BSD License
 */

class EontechModGeo6Poi
{
	/**
	 * @var string
	 */
	private $id;

	/**
	 * @var string
	 */
	private $type;

	/**
	 * @var string
	 */
	private $office;

	/**
	 * @var string
	 */
	private $street;

	/**
	 * @var string
	 */
	private $nr;

	/**
	 * @var string
	 */
	private $zip;

	/**
	 * @var string
	 */
	private $city;

	/**
	 * @var string
	 */
	private $country = 'BE';

	/**
	 * @var int
	 */
	private $x;

	/**
	 * @var int
	 */
	private $y;

	/**
	 * @var float
	 */
	private $latitude;

	/**
	 * @var float
	 */
	private $longitude;

	/**
	 * @var array
	 */
	private $services;

	/**
	 * @var array
	 */
	private $hours;

	/**
	 * @var array
	 */
	private $closed_from;

	/**
	 * @var array
	 */
	private $closed_to;

	/**
	 * @var string
	 */
	private $note;

	/**
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param array $closed_from
	 */
	public function setClosedFrom($closed_from)
	{
		$this->closed_from = $closed_from;
	}

	/**
	 * @return array
	 */
	public function getClosedFrom()
	{
		return $this->closed_from;
	}

	/**
	 * @param array $closed_to
	 */
	public function setClosedTo($closed_to)
	{
		$this->closed_to = $closed_to;
	}

	/**
	 * @return array
	 */
	public function getClosedTo()
	{
		return $this->closed_to;
	}

	/**
	 * @param int $index
	 * @param EontechModGeo6Day $day
	 */
	public function addHour($index, EontechModGeo6Day $day)
	{
		$this->hours[$index] = $day;
	}

	/**
	 * @param array $hours
	 */
	public function setHours($hours)
	{
		$this->hours = $hours;
	}

	/**
	 * @return array
	 */
	public function getHours()
	{
		return $this->hours;
	}

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param float $latitude
	 */
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
	}

	/**
	 * @return float
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * @param float $longitude
	 */
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
	}

	/**
	 * @return float
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * @param string $note
	 */
	public function setNote($note)
	{
		$this->note = $note;
	}

	/**
	 * @return string
	 */
	public function getNote()
	{
		return $this->note;
	}

	/**
	 * @param string $nr
	 */
	public function setNr($nr)
	{
		$this->nr = $nr;
	}

	/**
	 * @return string
	 */
	public function getNr()
	{
		return $this->nr;
	}

	/**
	 * @param string $office
	 */
	public function setOffice($office)
	{
		$this->office = $office;
	}

	/**
	 * @return string
	 */
	public function getOffice()
	{
		return $this->office;
	}

	/**
	 * @param EontechModGeo6Service $service
	 */
	public function addService(EontechModGeo6Service $service)
	{
		$this->services[] = $service;
	}

	/**
	 * @param array $services
	 */
	public function setServices($services)
	{
		$this->services = $services;
	}

	/**
	 * @return array
	 */
	public function getServices()
	{
		return $this->services;
	}

	/**
	 * @param string $street
	 */
	public function setStreet($street)
	{
		$this->street = $street;
	}

	/**
	 * @return string
	 */
	public function getStreet()
	{
		return $this->street;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param int $x
	 */
	public function setX($x)
	{
		$this->x = $x;
	}

	/**
	 * @return int
	 */
	public function getX()
	{
		return $this->x;
	}

	/**
	 * @param int $y
	 */
	public function setY($y)
	{
		$this->y = $y;
	}

	/**
	 * @return int
	 */
	public function getY()
	{
		return $this->y;
	}

	/**
	 * @param string $zip
	 */
	public function setZip($zip)
	{
		$this->zip = $zip;
	}

	/**
	 * @return string
	 */
	public function getZip()
	{
		return $this->zip;
	}

	/**
	 * Create a POI based on an XML-object
	 *
	 * @param  \SimpleXMLElement $xml
	 * @return EontechModGeo6Poi
	 */
	public static function createFromXML(\SimpleXMLElement $xml)
	{
		$poi = new EontechModGeo6Poi();

		if (isset($xml->Id) && $xml->Id != '')
			$poi->setId((string)$xml->Id);
		if (isset($xml->ID) && $xml->ID != '')
			$poi->setId((string)$xml->ID);
		if (isset($xml->Type) && $xml->Type != '')
			$poi->setType((string)$xml->Type);
		if (isset($xml->Name) && $xml->Name != '')
			$poi->setOffice((string)$xml->Name);
		if (isset($xml->OFFICE) && $xml->OFFICE != '')
			$poi->setOffice((string)$xml->OFFICE);
		if (isset($xml->Street) && $xml->Street != '')
			$poi->setStreet((string)$xml->Street);
		if (isset($xml->STREET) && $xml->STREET != '')
			$poi->setStreet((string)$xml->STREET);
		if (isset($xml->Number) && $xml->Number != '')
			$poi->setNr((string)$xml->Number);
		if (isset($xml->NR) && $xml->NR != '')
			$poi->setNr((string)$xml->NR);
		if (isset($xml->Zip) && $xml->Zip != '')
			$poi->setZip((string)$xml->Zip);
		if (isset($xml->ZIP) && $xml->ZIP != '')
			$poi->setZip((string)$xml->ZIP);
		if (isset($xml->City) && $xml->City != '')
			$poi->setCity((string)$xml->City);
		if (isset($xml->CITY) && $xml->CITY != '')
			$poi->setCity((string)$xml->CITY);
		if (isset($xml->Country) && $xml->Country != '')
			$poi->setCountry((string)$xml->Country);
		if (isset($xml->COUNTRY) && $xml->COUNTRY != '')
			$poi->setCountry((string)$xml->COUNTRY);
		if (isset($xml->X) && $xml->X != '')
			$poi->setX((int)$xml->X);
		if (isset($xml->Y) && $xml->Y != '')
			$poi->setY((int)$xml->Y);
		if (isset($xml->Longitude) && $xml->Longitude != '')
			$poi->setLongitude((float)$xml->Longitude);
		if (isset($xml->Latitude) && $xml->Latitude != '')
			$poi->setLatitude((float)$xml->Latitude);
		if (isset($xml->Services->Service))
			foreach ($xml->Services->Service as $service)
				$poi->addService(EontechModGeo6Service::createFromXML($service));

		if (isset($xml->Hours->Monday))
			$poi->addHour(1, EontechModGeo6Day::createFromXML($xml->Hours->Monday));
		if (isset($xml->Hours->Tuesday))
			$poi->addHour(2, EontechModGeo6Day::createFromXML($xml->Hours->Tuesday));
		if (isset($xml->Hours->Wednesday))
			$poi->addHour(3, EontechModGeo6Day::createFromXML($xml->Hours->Wednesday));
		if (isset($xml->Hours->Thursday))
			$poi->addHour(4, EontechModGeo6Day::createFromXML($xml->Hours->Thursday));
		if (isset($xml->Hours->Friday))
			$poi->addHour(5, EontechModGeo6Day::createFromXML($xml->Hours->Friday));
		if (isset($xml->Hours->Saturday))
			$poi->addHour(6, EontechModGeo6Day::createFromXML($xml->Hours->Saturday));
		if (isset($xml->Hours->Sunday))
			$poi->addHour(7, EontechModGeo6Day::createFromXML($xml->Hours->Sunday));
		if (isset($xml->ClosedFrom) && $xml->ClosedFrom != '')
			$poi->setClosedFrom((string)$xml->ClosedFrom);
		if (isset($xml->ClosedTo) && $xml->ClosedTo != '')
			$poi->setClosedTo((string)$xml->ClosedTo);
		if (isset($xml->NOTE) && $xml->NOTE != '')
			$poi->setNote((string)$xml->NOTE);

		return $poi;
	}
}
