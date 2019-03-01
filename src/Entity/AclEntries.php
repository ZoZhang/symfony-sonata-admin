<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclEntries
 *
 * @ORM\Table(name="acl_entries", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4", columns={"class_id", "object_identity_id", "field_name", "ace_order"})}, indexes={@ORM\Index(name="IDX_46C8B806DF9183C9", columns={"security_identity_id"}), @ORM\Index(name="IDX_46C8B8063D9AB4A6", columns={"object_identity_id"}), @ORM\Index(name="IDX_46C8B806EA000B103D9AB4A6DF9183C9", columns={"class_id", "object_identity_id", "security_identity_id"}), @ORM\Index(name="IDX_46C8B806EA000B10", columns={"class_id"})})
 * @ORM\Entity
 */
class AclEntries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $fieldName = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="ace_order", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $aceOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="mask", type="integer", nullable=false)
     */
    private $mask;

    /**
     * @var bool
     *
     * @ORM\Column(name="granting", type="boolean", nullable=false)
     */
    private $granting;

    /**
     * @var string
     *
     * @ORM\Column(name="granting_strategy", type="string", length=30, nullable=false)
     */
    private $grantingStrategy;

    /**
     * @var bool
     *
     * @ORM\Column(name="audit_success", type="boolean", nullable=false)
     */
    private $auditSuccess;

    /**
     * @var bool
     *
     * @ORM\Column(name="audit_failure", type="boolean", nullable=false)
     */
    private $auditFailure;

    /**
     * @var \AclObjectIdentities
     *
     * @ORM\ManyToOne(targetEntity="AclObjectIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_identity_id", referencedColumnName="id")
     * })
     */
    private $objectentity;

    /**
     * @var \AclSecurityIdentities
     *
     * @ORM\ManyToOne(targetEntity="AclSecurityIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="security_identity_id", referencedColumnName="id")
     * })
     */
    private $securityentity;

    /**
     * @var \AclClasses
     *
     * @ORM\ManyToOne(targetEntity="AclClasses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     * })
     */
    private $class;


}
