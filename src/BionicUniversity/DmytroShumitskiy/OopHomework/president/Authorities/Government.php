<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractAuthorities;

/**
 * Class Government
 */
class Government extends AbstractAuthorities
{
    /**
     * @var array
     */
    private $forRevision = [];
    /**
     * @var
     */
    private $paperType;
    /**
     * @var
     */
    private $text;
    /**
     * @var
     */
    private $rework;
    /**
     * @var
     */
    private $science;
    /**
     * @var
     */
    private $pensions;
    /**
     * @var
     */
    private $salary;
    /**
     * @var
     */
    private $medicine;

    /**
     * @param $name
     * @param $amount
     */
    public function __construct($name, $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
    }

    /**
     * @param Government $object
     *                           Rework the document after President refuse
     *                           and push to sign by President again
     */
    public function rework(Government $object)
    {
        echo("Rework now or later? Press key n or l\n");
        $object->rework = fgets(STDIN, 255);
        $object->rework = trim($object->rework);
        if ($object->rework == 'n') {
            echo("Type new text\n");
            $object->text = fgets(STDIN, 255);
            $object->text = trim($this->text);
        } elseif ($object->rework == 'l') {
            array_push($object->forRevision, [$object->paperType, $object->text]);
        } else {
            echo("Type l or n.\n");
        }
    }

    /**
     * Create new document of type : Contract, Act, Agreement, Statement,
     * then send to getPaper() method in President class,
     * then President read the text by readTest() method and make the choice or to sign or refused the paper,
     * if the choice sign: sign with setSignature() method,
     * if refused : return by rework() method to the Government rework() method
     */
    public function pushPaper()
    {
        echo("Enter paper type\n");
        $this->paperType = fgets(STDIN, 255);
        echo("Enter Text\n");
        $this->text = fgets(STDIN, 255);
        $this->paperType = trim($this->paperType);
    }

    /**
     * @param $taxes
     */
    public function setBudget($taxes)
    {
        $this->medicine = 0.3 * $taxes;
        $this->science = 0.1 * $taxes;
        $this->pensions = 0.2 * $taxes;
        $this->salary = 0.4 * $taxes;
    }

    /**
     * @return mixed
     */
    public function getRework()
    {
        return $this->rework;
    }

    /**
     * @return array
     */
    public function getPaperForRevision()
    {
        return $this->forRevision;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getPaperType()
    {
        return $this->paperType;
    }
}
