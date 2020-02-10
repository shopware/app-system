<?php declare(strict_types=1);

namespace Swag\SaasConnect\Core\Framework\Webhook;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Swag\SaasConnect\Core\Content\App\AppEntity;

class WebhookEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $eventName;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $appId;

    /**
     * @var AppEntity|null
     */
    protected $app;

    public function getEventName(): string
    {
        return $this->eventName;
    }

    public function setEventName(string $eventName): void
    {
        $this->eventName = $eventName;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    public function getApp(): ?AppEntity
    {
        return $this->app;
    }

    public function setApp(?AppEntity $app): void
    {
        $this->app = $app;
    }
}
