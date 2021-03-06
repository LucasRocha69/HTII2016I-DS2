<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="livros")
**/

class Livro
{
	/**
	  * @ORM\Id
	  * @ORM\Column(type="integer")
	  * @ORM\GeneratedValue(strategy="AUTO")
	**/
	protected $id;
	
	/**
	  * @ORM\Column(type="string")
	**/
	protected $titulo;
	
	/**
	  * @ORM\ManyToMany(targetEntity="Genero", inversedBy="livros")
	  * @ORM\JoinTable(name="livro_possui_generos")
	**/
	protected $generos;
}