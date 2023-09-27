<?php

declare(strict_types=1);

namespace Manuxi\SuluAdditionalAccountDataBundle\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\View\ViewHandlerInterface;
use HandcraftedInTheAlps\RestRoutingBundle\Controller\Annotations\RouteResource;
use HandcraftedInTheAlps\RestRoutingBundle\Routing\ClassResourceInterface;
use Sulu\Bundle\ContactBundle\Admin\ContactAdmin;
use Sulu\Bundle\ContactBundle\Entity\Account;
use Sulu\Bundle\ContactBundle\Entity\AccountInterface;
use Sulu\Component\Rest\AbstractRestController;
use Sulu\Component\Security\SecuredControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @RouteResource("additional-account-data")
 */
class AdditionalAccountDataController extends AbstractRestController implements ClassResourceInterface, SecuredControllerInterface
{
    private EntityManagerInterface $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager,
        ViewHandlerInterface $viewHandler,
        ?TokenStorageInterface $tokenStorage = null
    ) {
        $this->entityManager = $entityManager;

        parent::__construct($viewHandler, $tokenStorage);
    }

    public function getAction(int $id): Response
    {
        $account = $this->entityManager->getRepository(AccountInterface::class)->find($id);
        if (!$account) {
            throw new NotFoundHttpException();
        }

        return $this->handleView($this->view($this->getDataForEntity($account)));
    }

    public function putAction(Request $request, int $id): Response
    {
        $account = $this->entityManager->getRepository(AccountInterface::class)->find($id);
        if (!$account) {
            throw new NotFoundHttpException();
        }

        $this->mapDataToEntity($request->request->all(), $account);
        $this->entityManager->flush();

        return $this->handleView($this->view($this->getDataForEntity($account)));
    }

    /**
     * @param Account $entity
     * @return array<string, mixed>
     */
    protected function getDataForEntity(Account $entity): array
    {
        return [
            'id' => $entity->getId(),
            'registerNumber' => $entity->getRegisterNumber(),
            'placeOfJurisdiction' => $entity->getPlaceOfJurisdiction(),
        ];
    }

    /**
     * @param array $data
     * @param Account $entity
     * @return void
     */
    protected function mapDataToEntity(array $data, Account $entity): void
    {
        $entity->setRegisterNumber($data['registerNumber']);
        $entity->setPlaceOfJurisdiction($data['placeOfJurisdiction']);
    }

    public function getSecurityContext(): string
    {
        return ContactAdmin::ACCOUNT_SECURITY_CONTEXT;
    }

}