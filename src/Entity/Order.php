<?php




namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="order_backoffice")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="employee", type="string")
     */
    private $employee;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="text",nullable = true)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="text",nullable = true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text")
     */
    private $notes;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orders")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmployee(): string
    {
        if($this->employee === null)
        {
            $this->employee = '';
        }
        return $this->employee;
    }

    /**
     * @param string $employee
     */
    public function setEmployee(string $employee): void
    {
        $this->employee = $employee;
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {

        if($this->product === null)
        {
            $this->product = '';
        }
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        if($this->price === null)
        {
            $this->price = '';
        }
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        if($this->notes === null)
        {
            $this->notes = '';
        }
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }




}