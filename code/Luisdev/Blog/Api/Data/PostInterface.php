<?php
declare(strict_types=1);

namespace Luisdev\Blog\Api\Data;


/**
 * Blog post DTO interface.
 * @api
 * @since 1.0.0
 */
interface PostInterface
{
    const ID = "id";
    const TITLE = "title";
    const CONTENT = "content";
    const CREATED_AT = "created_at";


    /**
     * @return int
     */
    public function getId();


    /**
     * @param $id
     * @return $this
     */
    public function setId($id);


    /**
     * @return string
     */
    public function getTitle();


    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title);


    /**
     * @return string
     */
    public function getContent();


    /**
     * @param $content
     * @return $this
     */
    public function setContent($content);


    /**
     * @return string
     */
    public function getCreatedAt();

}
