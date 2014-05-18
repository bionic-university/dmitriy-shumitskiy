<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractAuthorities;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\Deputy;

/**
 * Class Supreme
 */
class Supreme extends AbstractAuthorities
{
    /**
     * @var
     */
    private $voteStatus;

    /**
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param Deputy $deputy
     * @param $voteStatus
     * Vote for new low of the depute,
     * to come into effect should be sign by President
     * setLow() method in President class
     */
    public function vote(Deputy $deputy, $voteStatus)
    {
        $this->voteStatus = $voteStatus;
        if ($this->$voteStatus == 'true') {
            array_push($deputy->acceptedLow, ['Approved by supreme but still need president sign']);
        } elseif ($this->$voteStatus == 'false') {
            array_push($deputy->refusedLow, ['Refused by Supreme']);
        } else {
            echo('Second argument should be true or false');
        }
    }

    /**
     * @return mixed
     */
    public function getVoteStatus()
    {
        return $this->voteStatus;
    }

} 