<?php

declare(strict_types=1);

namespace Manuxi\SuluAdditionalAccountDataBundle\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\View\ViewHandlerInterface;
use Manuxi\SuluAdditionalAccountDataBundle\Entity\Account;
use Sulu\Bundle\ContactBundle\Admin\ContactAdmin;
use Sulu\Bundle\ContactBundle\Entity\AccountInterface;
use Sulu\Component\Rest\AbstractRestController;
use Sulu\Component\Security\SecuredControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AdditionalAccountDataController extends AbstractRestController implements SecuredControllerInterface
{

    public function __construct(
        private EntityManagerInterface $entityManager,
        ViewHandlerInterface $viewHandler,
        ?TokenStorageInterface $tokenStorage = null
    ) {
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

            'descriptor' => $entity->getDescriptor(),
            'claim' => $entity->getClaim(),

            'monAm' => $entity->getMonAm(),
            'monPm' => $entity->getMonPm(),
            'tueAm' => $entity->getTueAm(),
            'tuePm' => $entity->getTuePm(),
            'wedAm' => $entity->getWedAm(),
            'wedPm' => $entity->getWedPm(),
            'thurAm' => $entity->getThurAm(),
            'thurPm' => $entity->getThurPm(),
            'friAm' => $entity->getFriAm(),
            'friPm' => $entity->getFriPm(),
            'satAm' => $entity->getSatAm(),
            'satPm' => $entity->getSatPm(),
        ];
    }

    /**
     * @param array $data
     * @param Account $entity
     * @return void
     */
    protected function mapDataToEntity(array $data, Account $entity): void
    {
        $entity->setRegisterNumber($data['registerNumber'] ?? null);
        $entity->setPlaceOfJurisdiction($data['placeOfJurisdiction'] ?? null);

        $entity->setDescriptor($data['descriptor'] ?? null);
        $entity->setClaim($data['claim'] ?? null);

        $entity->setMonPm($data['monPm'] ?? null);
        $entity->setTueAm($data['tueAm'] ?? null);
        $entity->setMonAm($data['monAm'] ?? null);
        $entity->setTuePm($data['tuePm'] ?? null);
        $entity->setWedAm($data['wedAm'] ?? null);
        $entity->setWedPm($data['wedPm'] ?? null);
        $entity->setThurAm($data['thurAm'] ?? null);
        $entity->setThurPm($data['thurPm'] ?? null);
        $entity->setFriAm($data['friAm'] ?? null);
        $entity->setFriPm($data['friPm'] ?? null);
        $entity->setSatAm($data['satAm'] ?? null);
        $entity->setSatPm($data['satPm'] ?? null);
    }

    public function getSecurityContext(): string
    {
        return ContactAdmin::ACCOUNT_SECURITY_CONTEXT;
    }

}