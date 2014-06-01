<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractCivilServant;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Government;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\InterfaceClasess\CivilServantInterface;

/**
 * Class PrimeMinister
 */
class PrimeMinister extends AbstractCivilServant implements CivilServantInterface
{
    /**
     * @var array
     */
    public $approvedMinisters = [];
    /**
     * @var
     */
    private $headOfMinistry;
    /**
     * @var
     */
    private $ministry;

    /**
     * @param $headOfMinistry
     * @param Government $object
     *                           Set the head of ministry but to be legitimate
     *                           need President approve : setMinisters() method in President class
     */
    public function setGovernmentHead($headOfMinistry, Government $object)
    {
        $this->headOfMinistry = $headOfMinistry;
        $this->ministry = $object->getName();
    }

    /**
     * @return array
     */
    public function getApprovedMinisters()
    {
        return $this->approvedMinisters;
    }

    /**
     * @return mixed
     */
    public function getHeadOfMinistry()
    {
        return $this->headOfMinistry;
    }

    /**
     * @return mixed
     */
    public function getMinistry()
    {
        return $this->ministry;
    }

    public function speech()
    {
        echo('Сегодня очень важный день для нашей страны ...');
    }

    public function makeSomeStuff($house, $goldBaton, $helicopter, $money)
    {
        array_push($this->stuff, $house, $goldBaton, $helicopter, $money);
    }

    public function setDeclaration()
    {
        array_push(
            $this->stuffForPublic,
            '1 car model 09 BAZ',
            '2 flat with 2 rooms',
            '2000grn per month income',
            '18000grn savings on bank account'
        );
    }

    public function getStuffForPublic()
    {
        return $this->stuffForPublic;
    }
}
