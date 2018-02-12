<?php
namespace Softheon\Enterprise\Api\Client;
final class SoftheonEnterpriseAPI
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_AcceptTask_operation = $_client->createOperation('AcceptTask');
        $this->_RejectTask_operation = $_client->createOperation('RejectTask');
        $this->_SuspendTask_operation = $_client->createOperation('SuspendTask');
        $this->_RouteTask_operation = $_client->createOperation('RouteTask');
        $this->_OverrideTask_operation = $_client->createOperation('OverrideTask');
        $this->_ResetTask_operation = $_client->createOperation('ResetTask');
        $this->_InitializeEntityWorkflow_operation = $_client->createOperation('InitializeEntityWorkflow');
        $this->_GetAllApplications_operation = $_client->createOperation('GetAllApplications');
        $this->_GetApplicationById_operation = $_client->createOperation('GetApplicationById');
        $this->_GetApplicationByName_operation = $_client->createOperation('GetApplicationByName');
        $this->_GetDrawerGroupAssociations_operation = $_client->createOperation('GetDrawerGroupAssociations');
        $this->_GetGroupDrawerAssociations_operation = $_client->createOperation('GetGroupDrawerAssociations');
        $this->_CreateOrUpdateDrawerGroupAssociation_operation = $_client->createOperation('CreateOrUpdateDrawerGroupAssociation');
        $this->_DeleteDrawerGroupAssociation_operation = $_client->createOperation('DeleteDrawerGroupAssociation');
        $this->_CreateOrUpdateGroupDrawerAssociation_operation = $_client->createOperation('CreateOrUpdateGroupDrawerAssociation');
        $this->_DeleteGroupDrawerAssociation_operation = $_client->createOperation('DeleteGroupDrawerAssociation');
        $this->_GetUserGroupAssociations_operation = $_client->createOperation('GetUserGroupAssociations');
        $this->_GetGroupUserAssociations_operation = $_client->createOperation('GetGroupUserAssociations');
        $this->_CreateUserGroupAssociation_operation = $_client->createOperation('CreateUserGroupAssociation');
        $this->_DeleteUserGroupAssociation_operation = $_client->createOperation('DeleteUserGroupAssociation');
        $this->_CreateGroupUserAssociation_operation = $_client->createOperation('CreateGroupUserAssociation');
        $this->_DeleteGroupUserAssociation_operation = $_client->createOperation('DeleteGroupUserAssociation');
        $this->_GetQueueGroupAssociations_operation = $_client->createOperation('GetQueueGroupAssociations');
        $this->_GetGroupQueueAssociations_operation = $_client->createOperation('GetGroupQueueAssociations');
        $this->_CreateOrUpdateQueueGroupAssociation_operation = $_client->createOperation('CreateOrUpdateQueueGroupAssociation');
        $this->_DeleteQueueGroupAssociation_operation = $_client->createOperation('DeleteQueueGroupAssociation');
        $this->_CreateOrUpdateGroupQueueAssociation_operation = $_client->createOperation('CreateOrUpdateGroupQueueAssociation');
        $this->_DeleteGroupQueueAssociation_operation = $_client->createOperation('DeleteGroupQueueAssociation');
        $this->_GetApplicationGroupAssociations_operation = $_client->createOperation('GetApplicationGroupAssociations');
        $this->_GetGroupApplicationAssociations_operation = $_client->createOperation('GetGroupApplicationAssociations');
        $this->_CreateOrUpdateApplicationGroupAssociation_operation = $_client->createOperation('CreateOrUpdateApplicationGroupAssociation');
        $this->_DeleteApplicationGroupAssociation_operation = $_client->createOperation('DeleteApplicationGroupAssociation');
        $this->_CreateOrUpdateGroupApplicationAssociation_operation = $_client->createOperation('CreateOrUpdateGroupApplicationAssociation');
        $this->_DeleteGroupApplicationAssociation_operation = $_client->createOperation('DeleteGroupApplicationAssociation');
        $this->_GetDrawerUserAssociations_operation = $_client->createOperation('GetDrawerUserAssociations');
        $this->_GetUserDrawerAssociations_operation = $_client->createOperation('GetUserDrawerAssociations');
        $this->_CreateOrUpdateDrawerUserAssociation_operation = $_client->createOperation('CreateOrUpdateDrawerUserAssociation');
        $this->_DeleteDrawerUserAssociation_operation = $_client->createOperation('DeleteDrawerUserAssociation');
        $this->_CreateOrUpdateUserDrawerAssociation_operation = $_client->createOperation('CreateOrUpdateUserDrawerAssociation');
        $this->_DeleteUserDrawerAssociation_operation = $_client->createOperation('DeleteUserDrawerAssociation');
        $this->_GetQueueUserAssociations_operation = $_client->createOperation('GetQueueUserAssociations');
        $this->_GetUserQueueAssociations_operation = $_client->createOperation('GetUserQueueAssociations');
        $this->_CreateOrUpdateQueueUserAssociation_operation = $_client->createOperation('CreateOrUpdateQueueUserAssociation');
        $this->_DeleteQueueUserAssociation_operation = $_client->createOperation('DeleteQueueUserAssociation');
        $this->_CreateOrUpdateUserQueueAssociation_operation = $_client->createOperation('CreateOrUpdateUserQueueAssociation');
        $this->_DeleteUserQueueAssociation_operation = $_client->createOperation('DeleteUserQueueAssociation');
        $this->_GetApplicationUserAssociations_operation = $_client->createOperation('GetApplicationUserAssociations');
        $this->_GetUserApplicationAssociations_operation = $_client->createOperation('GetUserApplicationAssociations');
        $this->_CreateOrUpdateApplicationUserAssociation_operation = $_client->createOperation('CreateOrUpdateApplicationUserAssociation');
        $this->_DeleteApplicationUserAssociation_operation = $_client->createOperation('DeleteApplicationUserAssociation');
        $this->_CreateOrUpdateUserApplicationAssociation_operation = $_client->createOperation('CreateOrUpdateUserApplicationAssociation');
        $this->_DeleteUserApplicationAssociation_operation = $_client->createOperation('DeleteUserApplicationAssociation');
        $this->_GetAttachmentsByFilter_operation = $_client->createOperation('GetAttachmentsByFilter');
        $this->_GetAttachmentById_operation = $_client->createOperation('GetAttachmentById');
        $this->_UpdateAttachment_operation = $_client->createOperation('UpdateAttachment');
        $this->_DeleteAttachment_operation = $_client->createOperation('DeleteAttachment');
        $this->_GetAttachmentFileContent_operation = $_client->createOperation('GetAttachmentFileContent');
        $this->_CreateAttachment_operation = $_client->createOperation('CreateAttachment');
        $this->_ArchiveAttachment_operation = $_client->createOperation('ArchiveAttachment');
        $this->_GetAttachmentVersionsByFilter_operation = $_client->createOperation('GetAttachmentVersionsByFilter');
        $this->_GetAttachmentVersionFileContent_operation = $_client->createOperation('GetAttachmentVersionFileContent');
        $this->_CheckOutAttachment_operation = $_client->createOperation('CheckOutAttachment');
        $this->_UndoCheckOutAttachment_operation = $_client->createOperation('UndoCheckOutAttachment');
        $this->_CheckInAttachment_operation = $_client->createOperation('CheckInAttachment');
        $this->_RollbackAttachmentVersion_operation = $_client->createOperation('RollbackAttachmentVersion');
        $this->_GetAllDrawers_operation = $_client->createOperation('GetAllDrawers');
        $this->_GetDrawerById_operation = $_client->createOperation('GetDrawerById');
        $this->_UpdateDrawer_operation = $_client->createOperation('UpdateDrawer');
        $this->_GetDrawerByName_operation = $_client->createOperation('GetDrawerByName');
        $this->_GetEntitiesByFilter_operation = $_client->createOperation('GetEntitiesByFilter');
        $this->_GetEntityById_operation = $_client->createOperation('GetEntityById');
        $this->_UpdateEntity_operation = $_client->createOperation('UpdateEntity');
        $this->_DeleteEntity_operation = $_client->createOperation('DeleteEntity');
        $this->_CreateEntity_operation = $_client->createOperation('CreateEntity');
        $this->_CopyEntity_operation = $_client->createOperation('CopyEntity');
        $this->_GetEventsByFilter_operation = $_client->createOperation('GetEventsByFilter');
        $this->_GetEventById_operation = $_client->createOperation('GetEventById');
        $this->_CreateEvent_operation = $_client->createOperation('CreateEvent');
        $this->_GetExtensionsByFilter_operation = $_client->createOperation('GetExtensionsByFilter');
        $this->_GetFlowsByFilter_operation = $_client->createOperation('GetFlowsByFilter');
        $this->_GetFlowById_operation = $_client->createOperation('GetFlowById');
        $this->_GetTemplatesByFilter_operation = $_client->createOperation('GetTemplatesByFilter');
        $this->_CreateTemplate_operation = $_client->createOperation('CreateTemplate');
        $this->_GetTemplateByType_operation = $_client->createOperation('GetTemplateByType');
        $this->_UpdateTemplateByType_operation = $_client->createOperation('UpdateTemplateByType');
        $this->_DeleteTemplateByType_operation = $_client->createOperation('DeleteTemplateByType');
        $this->_GetTemplateById_operation = $_client->createOperation('GetTemplateById');
        $this->_UpdateTemplateById_operation = $_client->createOperation('UpdateTemplateById');
        $this->_DeleteTemplateById_operation = $_client->createOperation('DeleteTemplateById');
        $this->_ValidateTemplateField_operation = $_client->createOperation('ValidateTemplateField');
        $this->_GetGroupsByFilter_operation = $_client->createOperation('GetGroupsByFilter');
        $this->_CreateGroup_operation = $_client->createOperation('CreateGroup');
        $this->_GetGroupById_operation = $_client->createOperation('GetGroupById');
        $this->_UpdateGroup_operation = $_client->createOperation('UpdateGroup');
        $this->_DeleteGroup_operation = $_client->createOperation('DeleteGroup');
        $this->_GetLinksByFilter_operation = $_client->createOperation('GetLinksByFilter');
        $this->_GetLinkById_operation = $_client->createOperation('GetLinkById');
        $this->_UpdateLink_operation = $_client->createOperation('UpdateLink');
        $this->_DeleteLink_operation = $_client->createOperation('DeleteLink');
        $this->_CreateLink_operation = $_client->createOperation('CreateLink');
        $this->_GetLocksByFilter_operation = $_client->createOperation('GetLocksByFilter');
        $this->_CreateOrUpdateLock_operation = $_client->createOperation('CreateOrUpdateLock');
        $this->_DeleteLock_operation = $_client->createOperation('DeleteLock');
        $this->_GetNotesByFilter_operation = $_client->createOperation('GetNotesByFilter');
        $this->_GetNoteById_operation = $_client->createOperation('GetNoteById');
        $this->_UpdateNote_operation = $_client->createOperation('UpdateNote');
        $this->_DeleteNote_operation = $_client->createOperation('DeleteNote');
        $this->_CreateNote_operation = $_client->createOperation('CreateNote');
        $this->_GetQueueAssignmentsByFilter_operation = $_client->createOperation('GetQueueAssignmentsByFilter');
        $this->_UpdateQueueAssignemnt_operation = $_client->createOperation('UpdateQueueAssignemnt');
        $this->_CreateQueueAssignment_operation = $_client->createOperation('CreateQueueAssignment');
        $this->_GetQueueAssignmentsById_operation = $_client->createOperation('GetQueueAssignmentsById');
        $this->_DeleteQueueAssignment_operation = $_client->createOperation('DeleteQueueAssignment');
        $this->_GetQueuesByFilter_operation = $_client->createOperation('GetQueuesByFilter');
        $this->_CreateQueue_operation = $_client->createOperation('CreateQueue');
        $this->_GetQueueById_operation = $_client->createOperation('GetQueueById');
        $this->_UpdateQueue_operation = $_client->createOperation('UpdateQueue');
        $this->_DeleteQueue_operation = $_client->createOperation('DeleteQueue');
        $this->_GetQueueByName_operation = $_client->createOperation('GetQueueByName');
        $this->_GetTasksByFilter_operation = $_client->createOperation('GetTasksByFilter');
        $this->_CreateTask_operation = $_client->createOperation('CreateTask');
        $this->_GetTaskById_operation = $_client->createOperation('GetTaskById');
        $this->_UpdateTask_operation = $_client->createOperation('UpdateTask');
        $this->_DeleteTask_operation = $_client->createOperation('DeleteTask');
        $this->_FetchTaskFromQueueAssignment_operation = $_client->createOperation('FetchTaskFromQueueAssignment');
        $this->_GetUsersByFilter_operation = $_client->createOperation('GetUsersByFilter');
        $this->_CreateUser_operation = $_client->createOperation('CreateUser');
        $this->_GetUserById_operation = $_client->createOperation('GetUserById');
        $this->_UpdateUser_operation = $_client->createOperation('UpdateUser');
        $this->_DeleteUser_operation = $_client->createOperation('DeleteUser');
        $this->_GetWorkflowsByFilter_operation = $_client->createOperation('GetWorkflowsByFilter');
        $this->_GetWorkflowById_operation = $_client->createOperation('GetWorkflowById');
        $this->_GetWorkflowQueuesById_operation = $_client->createOperation('GetWorkflowQueuesById');
        $this->_GetXMLTemplateByType_operation = $_client->createOperation('GetXMLTemplateByType');
        $this->_CreateXMLTemplate_operation = $_client->createOperation('CreateXMLTemplate');
    }
    /**
     * @param array $model
     * @return array
     */
    public function acceptTask(array $model)
    {
        return $this->_AcceptTask_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function rejectTask(array $model)
    {
        return $this->_RejectTask_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function suspendTask(array $model)
    {
        return $this->_SuspendTask_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function routeTask(array $model)
    {
        return $this->_RouteTask_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function overrideTask(array $model)
    {
        return $this->_OverrideTask_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function resetTask(array $model)
    {
        return $this->_ResetTask_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function initializeEntityWorkflow(array $model)
    {
        return $this->_InitializeEntityWorkflow_operation->call(['model' => $model]);
    }
    /**
     * @return array[]
     */
    public function getAllApplications()
    {
        return $this->_GetAllApplications_operation->call([]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getApplicationById($id)
    {
        return $this->_GetApplicationById_operation->call(['id' => $id]);
    }
    /**
     * @param string $name
     * @return array
     */
    public function getApplicationByName($name)
    {
        return $this->_GetApplicationByName_operation->call(['name' => $name]);
    }
    /**
     * @param integer|null $groupID
     * @param integer $drawerID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getDrawerGroupAssociations(
        $groupID = null,
        $drawerID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetDrawerGroupAssociations_operation->call([
            'groupID' => $groupID,
            'drawerID' => $drawerID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer|null $drawerID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getGroupDrawerAssociations(
        $groupID,
        $drawerID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetGroupDrawerAssociations_operation->call([
            'groupID' => $groupID,
            'drawerID' => $drawerID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $drawerID
     * @param array $model
     * @return array
     */
    public function createOrUpdateDrawerGroupAssociation(
        $groupID,
        $drawerID,
        array $model
    )
    {
        return $this->_CreateOrUpdateDrawerGroupAssociation_operation->call([
            'groupID' => $groupID,
            'drawerID' => $drawerID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $drawerID
     * @return array
     */
    public function deleteDrawerGroupAssociation(
        $groupID,
        $drawerID
    )
    {
        return $this->_DeleteDrawerGroupAssociation_operation->call([
            'groupID' => $groupID,
            'drawerID' => $drawerID
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $drawerID
     * @param array $model
     * @return array
     */
    public function createOrUpdateGroupDrawerAssociation(
        $groupID,
        $drawerID,
        array $model
    )
    {
        return $this->_CreateOrUpdateGroupDrawerAssociation_operation->call([
            'groupID' => $groupID,
            'drawerID' => $drawerID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $drawerID
     * @return array
     */
    public function deleteGroupDrawerAssociation(
        $groupID,
        $drawerID
    )
    {
        return $this->_DeleteGroupDrawerAssociation_operation->call([
            'groupID' => $groupID,
            'drawerID' => $drawerID
        ]);
    }
    /**
     * @param integer|null $groupID
     * @param integer $userID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getUserGroupAssociations(
        $groupID = null,
        $userID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetUserGroupAssociations_operation->call([
            'groupID' => $groupID,
            'userID' => $userID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer|null $userID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getGroupUserAssociations(
        $groupID,
        $userID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetGroupUserAssociations_operation->call([
            'groupID' => $groupID,
            'userID' => $userID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $userID
     * @param array $model
     * @return array
     */
    public function createUserGroupAssociation(
        $groupID,
        $userID,
        array $model
    )
    {
        return $this->_CreateUserGroupAssociation_operation->call([
            'groupID' => $groupID,
            'userID' => $userID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $userID
     * @return array
     */
    public function deleteUserGroupAssociation(
        $groupID,
        $userID
    )
    {
        return $this->_DeleteUserGroupAssociation_operation->call([
            'groupID' => $groupID,
            'userID' => $userID
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $userID
     * @param array $model
     * @return array
     */
    public function createGroupUserAssociation(
        $groupID,
        $userID,
        array $model
    )
    {
        return $this->_CreateGroupUserAssociation_operation->call([
            'groupID' => $groupID,
            'userID' => $userID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $userID
     * @return array
     */
    public function deleteGroupUserAssociation(
        $groupID,
        $userID
    )
    {
        return $this->_DeleteGroupUserAssociation_operation->call([
            'groupID' => $groupID,
            'userID' => $userID
        ]);
    }
    /**
     * @param integer|null $groupID
     * @param integer $queueID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getQueueGroupAssociations(
        $groupID = null,
        $queueID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetQueueGroupAssociations_operation->call([
            'groupID' => $groupID,
            'queueID' => $queueID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer|null $queueID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getGroupQueueAssociations(
        $groupID,
        $queueID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetGroupQueueAssociations_operation->call([
            'groupID' => $groupID,
            'queueID' => $queueID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $queueID
     * @param array $model
     * @return array
     */
    public function createOrUpdateQueueGroupAssociation(
        $groupID,
        $queueID,
        array $model
    )
    {
        return $this->_CreateOrUpdateQueueGroupAssociation_operation->call([
            'groupID' => $groupID,
            'queueID' => $queueID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $queueID
     * @return array
     */
    public function deleteQueueGroupAssociation(
        $groupID,
        $queueID
    )
    {
        return $this->_DeleteQueueGroupAssociation_operation->call([
            'groupID' => $groupID,
            'queueID' => $queueID
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $queueID
     * @param array $model
     * @return array
     */
    public function createOrUpdateGroupQueueAssociation(
        $groupID,
        $queueID,
        array $model
    )
    {
        return $this->_CreateOrUpdateGroupQueueAssociation_operation->call([
            'groupID' => $groupID,
            'queueID' => $queueID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $queueID
     * @return array
     */
    public function deleteGroupQueueAssociation(
        $groupID,
        $queueID
    )
    {
        return $this->_DeleteGroupQueueAssociation_operation->call([
            'groupID' => $groupID,
            'queueID' => $queueID
        ]);
    }
    /**
     * @param integer|null $groupID
     * @param integer $applicationID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getApplicationGroupAssociations(
        $groupID = null,
        $applicationID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetApplicationGroupAssociations_operation->call([
            'groupID' => $groupID,
            'applicationID' => $applicationID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer|null $applicationID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getGroupApplicationAssociations(
        $groupID,
        $applicationID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetGroupApplicationAssociations_operation->call([
            'groupID' => $groupID,
            'applicationID' => $applicationID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $applicationID
     * @param array $model
     * @return array
     */
    public function createOrUpdateApplicationGroupAssociation(
        $groupID,
        $applicationID,
        array $model
    )
    {
        return $this->_CreateOrUpdateApplicationGroupAssociation_operation->call([
            'groupID' => $groupID,
            'applicationID' => $applicationID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $applicationID
     * @return array
     */
    public function deleteApplicationGroupAssociation(
        $groupID,
        $applicationID
    )
    {
        return $this->_DeleteApplicationGroupAssociation_operation->call([
            'groupID' => $groupID,
            'applicationID' => $applicationID
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $applicationID
     * @param array $model
     * @return array
     */
    public function createOrUpdateGroupApplicationAssociation(
        $groupID,
        $applicationID,
        array $model
    )
    {
        return $this->_CreateOrUpdateGroupApplicationAssociation_operation->call([
            'groupID' => $groupID,
            'applicationID' => $applicationID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $groupID
     * @param integer $applicationID
     * @return array
     */
    public function deleteGroupApplicationAssociation(
        $groupID,
        $applicationID
    )
    {
        return $this->_DeleteGroupApplicationAssociation_operation->call([
            'groupID' => $groupID,
            'applicationID' => $applicationID
        ]);
    }
    /**
     * @param integer|null $userID
     * @param integer $drawerID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getDrawerUserAssociations(
        $userID = null,
        $drawerID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetDrawerUserAssociations_operation->call([
            'userID' => $userID,
            'drawerID' => $drawerID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $userID
     * @param integer|null $drawerID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getUserDrawerAssociations(
        $userID,
        $drawerID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetUserDrawerAssociations_operation->call([
            'userID' => $userID,
            'drawerID' => $drawerID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $drawerID
     * @param array $model
     * @return array
     */
    public function createOrUpdateDrawerUserAssociation(
        $userID,
        $drawerID,
        array $model
    )
    {
        return $this->_CreateOrUpdateDrawerUserAssociation_operation->call([
            'userID' => $userID,
            'drawerID' => $drawerID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $drawerID
     * @return array
     */
    public function deleteDrawerUserAssociation(
        $userID,
        $drawerID
    )
    {
        return $this->_DeleteDrawerUserAssociation_operation->call([
            'userID' => $userID,
            'drawerID' => $drawerID
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $drawerID
     * @param array $model
     * @return array
     */
    public function createOrUpdateUserDrawerAssociation(
        $userID,
        $drawerID,
        array $model
    )
    {
        return $this->_CreateOrUpdateUserDrawerAssociation_operation->call([
            'userID' => $userID,
            'drawerID' => $drawerID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $drawerID
     * @return array
     */
    public function deleteUserDrawerAssociation(
        $userID,
        $drawerID
    )
    {
        return $this->_DeleteUserDrawerAssociation_operation->call([
            'userID' => $userID,
            'drawerID' => $drawerID
        ]);
    }
    /**
     * @param integer|null $userID
     * @param integer $queueID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getQueueUserAssociations(
        $userID = null,
        $queueID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetQueueUserAssociations_operation->call([
            'userID' => $userID,
            'queueID' => $queueID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $userID
     * @param integer|null $queueID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getUserQueueAssociations(
        $userID,
        $queueID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetUserQueueAssociations_operation->call([
            'userID' => $userID,
            'queueID' => $queueID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $queueID
     * @param array $model
     * @return array
     */
    public function createOrUpdateQueueUserAssociation(
        $userID,
        $queueID,
        array $model
    )
    {
        return $this->_CreateOrUpdateQueueUserAssociation_operation->call([
            'userID' => $userID,
            'queueID' => $queueID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $queueID
     * @return array
     */
    public function deleteQueueUserAssociation(
        $userID,
        $queueID
    )
    {
        return $this->_DeleteQueueUserAssociation_operation->call([
            'userID' => $userID,
            'queueID' => $queueID
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $queueID
     * @param array $model
     * @return array
     */
    public function createOrUpdateUserQueueAssociation(
        $userID,
        $queueID,
        array $model
    )
    {
        return $this->_CreateOrUpdateUserQueueAssociation_operation->call([
            'userID' => $userID,
            'queueID' => $queueID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $queueID
     * @return array
     */
    public function deleteUserQueueAssociation(
        $userID,
        $queueID
    )
    {
        return $this->_DeleteUserQueueAssociation_operation->call([
            'userID' => $userID,
            'queueID' => $queueID
        ]);
    }
    /**
     * @param integer|null $userID
     * @param integer $applicationID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getApplicationUserAssociations(
        $userID = null,
        $applicationID,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetApplicationUserAssociations_operation->call([
            'userID' => $userID,
            'applicationID' => $applicationID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $userID
     * @param integer|null $applicationID
     * @param integer|null $acl
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getUserApplicationAssociations(
        $userID,
        $applicationID = null,
        $acl = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetUserApplicationAssociations_operation->call([
            'userID' => $userID,
            'applicationID' => $applicationID,
            'acl' => $acl,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $applicationID
     * @param array $model
     * @return array
     */
    public function createOrUpdateApplicationUserAssociation(
        $userID,
        $applicationID,
        array $model
    )
    {
        return $this->_CreateOrUpdateApplicationUserAssociation_operation->call([
            'userID' => $userID,
            'applicationID' => $applicationID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $applicationID
     * @return array
     */
    public function deleteApplicationUserAssociation(
        $userID,
        $applicationID
    )
    {
        return $this->_DeleteApplicationUserAssociation_operation->call([
            'userID' => $userID,
            'applicationID' => $applicationID
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $applicationID
     * @param array $model
     * @return array
     */
    public function createOrUpdateUserApplicationAssociation(
        $userID,
        $applicationID,
        array $model
    )
    {
        return $this->_CreateOrUpdateUserApplicationAssociation_operation->call([
            'userID' => $userID,
            'applicationID' => $applicationID,
            'model' => $model
        ]);
    }
    /**
     * @param integer $userID
     * @param integer $applicationID
     * @return array
     */
    public function deleteUserApplicationAssociation(
        $userID,
        $applicationID
    )
    {
        return $this->_DeleteUserApplicationAssociation_operation->call([
            'userID' => $userID,
            'applicationID' => $applicationID
        ]);
    }
    /**
     * @param string|null $type
     * @param string|null $extension
     * @param string|null $minSize
     * @param string|null $maxSize
     * @param integer|null $acl
     * @param integer|null $entityID
     * @param integer|null $drawerID
     * @param string|null $name
     * @param integer|null $creatorUserID
     * @param integer|null $modifierUserID
     * @param string|null $minInsertionTime
     * @param string|null $maxInsertionTime
     * @param string|null $minModificationTime
     * @param string|null $maxModificationTime
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getAttachmentsByFilter(
        $type = null,
        $extension = null,
        $minSize = null,
        $maxSize = null,
        $acl = null,
        $entityID = null,
        $drawerID = null,
        $name = null,
        $creatorUserID = null,
        $modifierUserID = null,
        $minInsertionTime = null,
        $maxInsertionTime = null,
        $minModificationTime = null,
        $maxModificationTime = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetAttachmentsByFilter_operation->call([
            'type' => $type,
            'extension' => $extension,
            'minSize' => $minSize,
            'maxSize' => $maxSize,
            'acl' => $acl,
            'entityID' => $entityID,
            'drawerID' => $drawerID,
            'name' => $name,
            'creatorUserID' => $creatorUserID,
            'modifierUserID' => $modifierUserID,
            'minInsertionTime' => $minInsertionTime,
            'maxInsertionTime' => $maxInsertionTime,
            'minModificationTime' => $minModificationTime,
            'maxModificationTime' => $maxModificationTime,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getAttachmentById(
        $drawer,
        $id
    )
    {
        return $this->_GetAttachmentById_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateAttachment(
        $drawer,
        $id,
        array $model
    )
    {
        return $this->_UpdateAttachment_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function deleteAttachment(
        $drawer,
        $id
    )
    {
        return $this->_DeleteAttachment_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getAttachmentFileContent(
        $drawer,
        $id
    )
    {
        return $this->_GetAttachmentFileContent_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @return array
     */
    public function createAttachment($drawer)
    {
        return $this->_CreateAttachment_operation->call(['drawer' => $drawer]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function archiveAttachment(
        $drawer,
        $id
    )
    {
        return $this->_ArchiveAttachment_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param integer|null $version
     * @param integer|null $creatorUserID
     * @param integer|null $accessorUserID
     * @param string|null $minAccessTime
     * @param string|null $maxAccessTime
     * @param string|null $minCreationTime
     * @param string|null $maxCreationTime
     * @param string|null $minModificationTime
     * @param string|null $maxModificationTime
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getAttachmentVersionsByFilter(
        $drawer,
        $id,
        $version = null,
        $creatorUserID = null,
        $accessorUserID = null,
        $minAccessTime = null,
        $maxAccessTime = null,
        $minCreationTime = null,
        $maxCreationTime = null,
        $minModificationTime = null,
        $maxModificationTime = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetAttachmentVersionsByFilter_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'version' => $version,
            'creatorUserID' => $creatorUserID,
            'accessorUserID' => $accessorUserID,
            'minAccessTime' => $minAccessTime,
            'maxAccessTime' => $maxAccessTime,
            'minCreationTime' => $minCreationTime,
            'maxCreationTime' => $maxCreationTime,
            'minModificationTime' => $minModificationTime,
            'maxModificationTime' => $maxModificationTime,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param integer $versionID
     * @return array
     */
    public function getAttachmentVersionFileContent(
        $drawer,
        $id,
        $versionID
    )
    {
        return $this->_GetAttachmentVersionFileContent_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'versionID' => $versionID
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function checkOutAttachment(
        $drawer,
        $id
    )
    {
        return $this->_CheckOutAttachment_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function undoCheckOutAttachment(
        $drawer,
        $id
    )
    {
        return $this->_UndoCheckOutAttachment_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function checkInAttachment(
        $drawer,
        $id
    )
    {
        return $this->_CheckInAttachment_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param integer $versionID
     * @return array
     */
    public function rollbackAttachmentVersion(
        $drawer,
        $id,
        $versionID
    )
    {
        return $this->_RollbackAttachmentVersion_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'versionID' => $versionID
        ]);
    }
    /**
     * @return array[]
     */
    public function getAllDrawers()
    {
        return $this->_GetAllDrawers_operation->call([]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getDrawerById($id)
    {
        return $this->_GetDrawerById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateDrawer(
        $id,
        array $model
    )
    {
        return $this->_UpdateDrawer_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param string $name
     * @return array
     */
    public function getDrawerByName($name)
    {
        return $this->_GetDrawerByName_operation->call(['name' => $name]);
    }
    /**
     * @param integer $drawerID
     * @param integer|null $acl
     * @param integer|null $type
     * @param string|null $name
     * @param string|null $state
     * @param integer|null $referenceCount
     * @param integer|null $attachCount
     * @param integer|null $noteCount
     * @param integer|null $ownerUserID
     * @param integer|null $ownerGroupID
     * @param integer|null $creatorUserID
     * @param integer|null $creatorGroupID
     * @param integer|null $modifierUserID
     * @param integer|null $modifierGroupID
     * @param string|null $minCreationTime
     * @param string|null $maxCreationTime
     * @param string|null $minModificationTime
     * @param string|null $maxModificationTime
     * @param array[]|null $metadata
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getEntitiesByFilter(
        $drawerID,
        $acl = null,
        $type = null,
        $name = null,
        $state = null,
        $referenceCount = null,
        $attachCount = null,
        $noteCount = null,
        $ownerUserID = null,
        $ownerGroupID = null,
        $creatorUserID = null,
        $creatorGroupID = null,
        $modifierUserID = null,
        $modifierGroupID = null,
        $minCreationTime = null,
        $maxCreationTime = null,
        $minModificationTime = null,
        $maxModificationTime = null,
        array $metadata = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetEntitiesByFilter_operation->call([
            'drawerID' => $drawerID,
            'acl' => $acl,
            'type' => $type,
            'name' => $name,
            'state' => $state,
            'referenceCount' => $referenceCount,
            'attachCount' => $attachCount,
            'noteCount' => $noteCount,
            'ownerUserID' => $ownerUserID,
            'ownerGroupID' => $ownerGroupID,
            'creatorUserID' => $creatorUserID,
            'creatorGroupID' => $creatorGroupID,
            'modifierUserID' => $modifierUserID,
            'modifierGroupID' => $modifierGroupID,
            'minCreationTime' => $minCreationTime,
            'maxCreationTime' => $maxCreationTime,
            'minModificationTime' => $minModificationTime,
            'maxModificationTime' => $maxModificationTime,
            'metadata' => $metadata,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getEntityById(
        $drawer,
        $id
    )
    {
        return $this->_GetEntityById_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateEntity(
        $drawer,
        $id,
        array $model
    )
    {
        return $this->_UpdateEntity_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function deleteEntity(
        $drawer,
        $id
    )
    {
        return $this->_DeleteEntity_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param array $model
     * @return array
     */
    public function createEntity(
        $drawer,
        array $model
    )
    {
        return $this->_CreateEntity_operation->call([
            'drawer' => $drawer,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function copyEntity(
        $drawer,
        $id,
        array $model
    )
    {
        return $this->_CopyEntity_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawerID
     * @param integer $entityID
     * @param string|null $type
     * @param string|null $minEventTime
     * @param string|null $maxEventTime
     * @param integer|null $eventUserID
     * @param integer|null $eventGroupID
     * @param string|null $category
     * @param string|null $class
     * @param string|null $operation
     * @param integer|null $minProcessingTime
     * @param integer|null $maxProcessingTime
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getEventsByFilter(
        $drawerID,
        $entityID,
        $type = null,
        $minEventTime = null,
        $maxEventTime = null,
        $eventUserID = null,
        $eventGroupID = null,
        $category = null,
        $class = null,
        $operation = null,
        $minProcessingTime = null,
        $maxProcessingTime = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetEventsByFilter_operation->call([
            'drawerID' => $drawerID,
            'entityID' => $entityID,
            'type' => $type,
            'minEventTime' => $minEventTime,
            'maxEventTime' => $maxEventTime,
            'eventUserID' => $eventUserID,
            'eventGroupID' => $eventGroupID,
            'category' => $category,
            'class' => $class,
            'operation' => $operation,
            'minProcessingTime' => $minProcessingTime,
            'maxProcessingTime' => $maxProcessingTime,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getEventById(
        $drawer,
        $id
    )
    {
        return $this->_GetEventById_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param array $model
     * @return array
     */
    public function createEvent(
        $drawer,
        array $model
    )
    {
        return $this->_CreateEvent_operation->call([
            'drawer' => $drawer,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawerID
     * @param integer $entityID
     * @param integer $profileID
     * @param integer|null $iD
     * @param integer|null $type
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getExtensionsByFilter(
        $drawerID,
        $entityID,
        $profileID,
        $iD = null,
        $type = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetExtensionsByFilter_operation->call([
            'drawerID' => $drawerID,
            'entityID' => $entityID,
            'profileID' => $profileID,
            'iD' => $iD,
            'type' => $type,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawerID
     * @param integer $entityID
     * @param string|null $type
     * @param integer|null $queueID
     * @param string|null $minWorkflowTime
     * @param string|null $maxWorkflowTime
     * @param string|null $minInsertionTime
     * @param string|null $maxInsertionTime
     * @param integer|null $workflowUserID
     * @param integer|null $workflowGroupID
     * @param string|null $operation
     * @param string|null $category
     * @param string|null $status
     * @param string|null $state
     * @param integer|null $minIndex1
     * @param integer|null $maxIndex1
     * @param integer|null $minIndex2
     * @param integer|null $maxIndex2
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getFlowsByFilter(
        $drawerID,
        $entityID,
        $type = null,
        $queueID = null,
        $minWorkflowTime = null,
        $maxWorkflowTime = null,
        $minInsertionTime = null,
        $maxInsertionTime = null,
        $workflowUserID = null,
        $workflowGroupID = null,
        $operation = null,
        $category = null,
        $status = null,
        $state = null,
        $minIndex1 = null,
        $maxIndex1 = null,
        $minIndex2 = null,
        $maxIndex2 = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetFlowsByFilter_operation->call([
            'drawerID' => $drawerID,
            'entityID' => $entityID,
            'type' => $type,
            'queueID' => $queueID,
            'minWorkflowTime' => $minWorkflowTime,
            'maxWorkflowTime' => $maxWorkflowTime,
            'minInsertionTime' => $minInsertionTime,
            'maxInsertionTime' => $maxInsertionTime,
            'workflowUserID' => $workflowUserID,
            'workflowGroupID' => $workflowGroupID,
            'operation' => $operation,
            'category' => $category,
            'status' => $status,
            'state' => $state,
            'minIndex1' => $minIndex1,
            'maxIndex1' => $maxIndex1,
            'minIndex2' => $minIndex2,
            'maxIndex2' => $maxIndex2,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getFlowById(
        $drawer,
        $id
    )
    {
        return $this->_GetFlowById_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer|null $drawerID
     * @param string|null $name
     * @param string|null $category
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param integer|null $sortBy
     * @return array[]
     */
    public function getTemplatesByFilter(
        $drawerID = null,
        $name = null,
        $category = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetTemplatesByFilter_operation->call([
            'drawerID' => $drawerID,
            'name' => $name,
            'category' => $category,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function createTemplate(array $model)
    {
        return $this->_CreateTemplate_operation->call(['model' => $model]);
    }
    /**
     * @param integer $type
     * @return array
     */
    public function getTemplateByType($type)
    {
        return $this->_GetTemplateByType_operation->call(['type' => $type]);
    }
    /**
     * @param integer $type
     * @param array $model
     * @return array
     */
    public function updateTemplateByType(
        $type,
        array $model
    )
    {
        return $this->_UpdateTemplateByType_operation->call([
            'type' => $type,
            'model' => $model
        ]);
    }
    /**
     * @param integer $type
     * @return array
     */
    public function deleteTemplateByType($type)
    {
        return $this->_DeleteTemplateByType_operation->call(['type' => $type]);
    }
    /**
     * @param string $id
     * @return array
     */
    public function getTemplateById($id)
    {
        return $this->_GetTemplateById_operation->call(['id' => $id]);
    }
    /**
     * @param string $id
     * @param array $model
     * @return array
     */
    public function updateTemplateById(
        $id,
        array $model
    )
    {
        return $this->_UpdateTemplateById_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param string $id
     * @return array
     */
    public function deleteTemplateById($id)
    {
        return $this->_DeleteTemplateById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $type
     * @param string $fieldID
     * @param string|null $sortColumn
     * @param array[]|null $metadata
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param integer|null $sortBy
     * @return array
     */
    public function validateTemplateField(
        $type,
        $fieldID,
        $sortColumn = null,
        array $metadata = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_ValidateTemplateField_operation->call([
            'type' => $type,
            'fieldID' => $fieldID,
            'sortColumn' => $sortColumn,
            'metadata' => $metadata,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer|null $iD
     * @param integer|null $userID
     * @param string|null $name
     * @param string|null $type
     * @param string|null $state
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getGroupsByFilter(
        $iD = null,
        $userID = null,
        $name = null,
        $type = null,
        $state = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetGroupsByFilter_operation->call([
            'iD' => $iD,
            'userID' => $userID,
            'name' => $name,
            'type' => $type,
            'state' => $state,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function createGroup(array $model)
    {
        return $this->_CreateGroup_operation->call(['model' => $model]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getGroupById($id)
    {
        return $this->_GetGroupById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateGroup(
        $id,
        array $model
    )
    {
        return $this->_UpdateGroup_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function deleteGroup($id)
    {
        return $this->_DeleteGroup_operation->call(['id' => $id]);
    }
    /**
     * @param integer|null $childEntityID
     * @param integer|null $childDrawerID
     * @param integer|null $childType
     * @param integer|null $acl
     * @param integer|null $entityID
     * @param integer|null $drawerID
     * @param string|null $name
     * @param integer|null $creatorUserID
     * @param integer|null $modifierUserID
     * @param string|null $minInsertionTime
     * @param string|null $maxInsertionTime
     * @param string|null $minModificationTime
     * @param string|null $maxModificationTime
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getLinksByFilter(
        $childEntityID = null,
        $childDrawerID = null,
        $childType = null,
        $acl = null,
        $entityID = null,
        $drawerID = null,
        $name = null,
        $creatorUserID = null,
        $modifierUserID = null,
        $minInsertionTime = null,
        $maxInsertionTime = null,
        $minModificationTime = null,
        $maxModificationTime = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetLinksByFilter_operation->call([
            'childEntityID' => $childEntityID,
            'childDrawerID' => $childDrawerID,
            'childType' => $childType,
            'acl' => $acl,
            'entityID' => $entityID,
            'drawerID' => $drawerID,
            'name' => $name,
            'creatorUserID' => $creatorUserID,
            'modifierUserID' => $modifierUserID,
            'minInsertionTime' => $minInsertionTime,
            'maxInsertionTime' => $maxInsertionTime,
            'minModificationTime' => $minModificationTime,
            'maxModificationTime' => $maxModificationTime,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getLinkById(
        $drawer,
        $id
    )
    {
        return $this->_GetLinkById_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateLink(
        $drawer,
        $id,
        array $model
    )
    {
        return $this->_UpdateLink_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function deleteLink(
        $drawer,
        $id
    )
    {
        return $this->_DeleteLink_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param array $model
     * @return array
     */
    public function createLink(
        $drawer,
        array $model
    )
    {
        return $this->_CreateLink_operation->call([
            'drawer' => $drawer,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getLocksByFilter(
        $drawer,
        $id
    )
    {
        return $this->_GetLocksByFilter_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function createOrUpdateLock(
        $drawer,
        $id,
        array $model
    )
    {
        return $this->_CreateOrUpdateLock_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function deleteLock(
        $drawer,
        $id
    )
    {
        return $this->_DeleteLock_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawerID
     * @param integer|null $entityID
     * @param string|null $name
     * @param integer|null $creatorUserID
     * @param integer|null $modifierUserID
     * @param string|null $minCreationTime
     * @param string|null $maxCreationTime
     * @param string|null $minModificationTime
     * @param string|null $maxModificationTime
     * @param integer|null $parentID
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getNotesByFilter(
        $drawerID,
        $entityID = null,
        $name = null,
        $creatorUserID = null,
        $modifierUserID = null,
        $minCreationTime = null,
        $maxCreationTime = null,
        $minModificationTime = null,
        $maxModificationTime = null,
        $parentID = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetNotesByFilter_operation->call([
            'drawerID' => $drawerID,
            'entityID' => $entityID,
            'name' => $name,
            'creatorUserID' => $creatorUserID,
            'modifierUserID' => $modifierUserID,
            'minCreationTime' => $minCreationTime,
            'maxCreationTime' => $maxCreationTime,
            'minModificationTime' => $minModificationTime,
            'maxModificationTime' => $maxModificationTime,
            'parentID' => $parentID,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function getNoteById(
        $drawer,
        $id
    )
    {
        return $this->_GetNoteById_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateNote(
        $drawer,
        $id,
        array $model
    )
    {
        return $this->_UpdateNote_operation->call([
            'drawer' => $drawer,
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $drawer
     * @param integer $id
     * @return array
     */
    public function deleteNote(
        $drawer,
        $id
    )
    {
        return $this->_DeleteNote_operation->call([
            'drawer' => $drawer,
            'id' => $id
        ]);
    }
    /**
     * @param integer $drawer
     * @param array $model
     * @return array
     */
    public function createNote(
        $drawer,
        array $model
    )
    {
        return $this->_CreateNote_operation->call([
            'drawer' => $drawer,
            'model' => $model
        ]);
    }
    /**
     * @param integer|null $queueID
     * @param integer|null $userID
     * @param integer|null $groupID
     * @param string|null $type
     * @param integer|null $order
     * @param string|null $taskSortColumn
     * @param string|null $state
     * @param string|null $fetchType
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getQueueAssignmentsByFilter(
        $queueID = null,
        $userID = null,
        $groupID = null,
        $type = null,
        $order = null,
        $taskSortColumn = null,
        $state = null,
        $fetchType = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetQueueAssignmentsByFilter_operation->call([
            'queueID' => $queueID,
            'userID' => $userID,
            'groupID' => $groupID,
            'type' => $type,
            'order' => $order,
            'taskSortColumn' => $taskSortColumn,
            'state' => $state,
            'fetchType' => $fetchType,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function updateQueueAssignemnt(array $model)
    {
        return $this->_UpdateQueueAssignemnt_operation->call(['model' => $model]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function createQueueAssignment(array $model)
    {
        return $this->_CreateQueueAssignment_operation->call(['model' => $model]);
    }
    /**
     * @param integer $userId
     * @param integer $queueId
     * @return array
     */
    public function getQueueAssignmentsById(
        $userId,
        $queueId
    )
    {
        return $this->_GetQueueAssignmentsById_operation->call([
            'userId' => $userId,
            'queueId' => $queueId
        ]);
    }
    /**
     * @param integer $userId
     * @param integer $queueId
     * @return array
     */
    public function deleteQueueAssignment(
        $userId,
        $queueId
    )
    {
        return $this->_DeleteQueueAssignment_operation->call([
            'userId' => $userId,
            'queueId' => $queueId
        ]);
    }
    /**
     * @param integer|null $iD
     * @param string|null $name
     * @param string|null $alias
     * @param string|null $type
     * @param integer|null $access
     * @param boolean|null $bypassSecurity
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getQueuesByFilter(
        $iD = null,
        $name = null,
        $alias = null,
        $type = null,
        $access = null,
        $bypassSecurity = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetQueuesByFilter_operation->call([
            'iD' => $iD,
            'name' => $name,
            'alias' => $alias,
            'type' => $type,
            'access' => $access,
            'bypassSecurity' => $bypassSecurity,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function createQueue(array $model)
    {
        return $this->_CreateQueue_operation->call(['model' => $model]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getQueueById($id)
    {
        return $this->_GetQueueById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateQueue(
        $id,
        array $model
    )
    {
        return $this->_UpdateQueue_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function deleteQueue($id)
    {
        return $this->_DeleteQueue_operation->call(['id' => $id]);
    }
    /**
     * @param string $name
     * @return array
     */
    public function getQueueByName($name)
    {
        return $this->_GetQueueByName_operation->call(['name' => $name]);
    }
    /**
     * @param integer|null $lastTaskID
     * @param integer|null $iD
     * @param integer|null $type
     * @param integer|null $queueID
     * @param integer|null $queueType
     * @param integer|null $drawerID
     * @param string|null $description
     * @param integer|null $taskID
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getTasksByFilter(
        $lastTaskID = null,
        $iD = null,
        $type = null,
        $queueID = null,
        $queueType = null,
        $drawerID = null,
        $description = null,
        $taskID = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetTasksByFilter_operation->call([
            'lastTaskID' => $lastTaskID,
            'iD' => $iD,
            'type' => $type,
            'queueID' => $queueID,
            'queueType' => $queueType,
            'drawerID' => $drawerID,
            'description' => $description,
            'taskID' => $taskID,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function createTask(array $model)
    {
        return $this->_CreateTask_operation->call(['model' => $model]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getTaskById($id)
    {
        return $this->_GetTaskById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateTask(
        $id,
        array $model
    )
    {
        return $this->_UpdateTask_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function deleteTask($id)
    {
        return $this->_DeleteTask_operation->call(['id' => $id]);
    }
    /**
     * @return array
     */
    public function fetchTaskFromQueueAssignment()
    {
        return $this->_FetchTaskFromQueueAssignment_operation->call([]);
    }
    /**
     * @param integer|null $iD
     * @param integer|null $primaryGroupID
     * @param integer|null $groupID
     * @param string|null $groupName
     * @param string|null $username
     * @param string|null $type
     * @param string|null $state
     * @param string|null $fullName
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param string|null $sortBy
     * @return array[]
     */
    public function getUsersByFilter(
        $iD = null,
        $primaryGroupID = null,
        $groupID = null,
        $groupName = null,
        $username = null,
        $type = null,
        $state = null,
        $fullName = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetUsersByFilter_operation->call([
            'iD' => $iD,
            'primaryGroupID' => $primaryGroupID,
            'groupID' => $groupID,
            'groupName' => $groupName,
            'username' => $username,
            'type' => $type,
            'state' => $state,
            'fullName' => $fullName,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param array $model
     * @return array
     */
    public function createUser(array $model)
    {
        return $this->_CreateUser_operation->call(['model' => $model]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getUserById($id)
    {
        return $this->_GetUserById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @param array $model
     * @return array
     */
    public function updateUser(
        $id,
        array $model
    )
    {
        return $this->_UpdateUser_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function deleteUser($id)
    {
        return $this->_DeleteUser_operation->call(['id' => $id]);
    }
    /**
     * @param integer|null $applicationID
     * @param integer|null $entityType
     * @param string|null $name
     * @param integer|null $page
     * @param integer|null $pageSize
     * @param string|null $sortOrder
     * @param integer|null $sortBy
     * @return array[]
     */
    public function getWorkflowsByFilter(
        $applicationID = null,
        $entityType = null,
        $name = null,
        $page = null,
        $pageSize = null,
        $sortOrder = null,
        $sortBy = null
    )
    {
        return $this->_GetWorkflowsByFilter_operation->call([
            'applicationID' => $applicationID,
            'entityType' => $entityType,
            'name' => $name,
            'page' => $page,
            'pageSize' => $pageSize,
            'sortOrder' => $sortOrder,
            'sortBy' => $sortBy
        ]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getWorkflowById($id)
    {
        return $this->_GetWorkflowById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @return array[]
     */
    public function getWorkflowQueuesById($id)
    {
        return $this->_GetWorkflowQueuesById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $type
     * @return string
     */
    public function getXMLTemplateByType($type)
    {
        return $this->_GetXMLTemplateByType_operation->call(['type' => $type]);
    }
    /**
     * @return string
     */
    public function createXMLTemplate()
    {
        return $this->_CreateXMLTemplate_operation->call([]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_AcceptTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_RejectTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_SuspendTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_RouteTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_OverrideTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_ResetTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_InitializeEntityWorkflow_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAllApplications_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetApplicationById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetApplicationByName_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetDrawerGroupAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetGroupDrawerAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateDrawerGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteDrawerGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateGroupDrawerAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteGroupDrawerAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetUserGroupAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetGroupUserAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateUserGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteUserGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateGroupUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteGroupUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueueGroupAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetGroupQueueAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateQueueGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteQueueGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateGroupQueueAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteGroupQueueAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetApplicationGroupAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetGroupApplicationAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateApplicationGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteApplicationGroupAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateGroupApplicationAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteGroupApplicationAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetDrawerUserAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetUserDrawerAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateDrawerUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteDrawerUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateUserDrawerAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteUserDrawerAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueueUserAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetUserQueueAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateQueueUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteQueueUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateUserQueueAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteUserQueueAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetApplicationUserAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetUserApplicationAssociations_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateApplicationUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteApplicationUserAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateUserApplicationAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteUserApplicationAssociation_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAttachmentsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAttachmentById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAttachmentFileContent_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_ArchiveAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAttachmentVersionsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAttachmentVersionFileContent_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CheckOutAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UndoCheckOutAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CheckInAttachment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_RollbackAttachmentVersion_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAllDrawers_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetDrawerById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateDrawer_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetDrawerByName_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetEntitiesByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetEntityById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateEntity_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteEntity_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateEntity_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CopyEntity_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetEventsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetEventById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateEvent_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetExtensionsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetFlowsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetFlowById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetTemplatesByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateTemplate_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetTemplateByType_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateTemplateByType_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteTemplateByType_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetTemplateById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateTemplateById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteTemplateById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_ValidateTemplateField_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetGroupsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateGroup_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetGroupById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateGroup_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteGroup_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetLinksByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetLinkById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateLink_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteLink_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateLink_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetLocksByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdateLock_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteLock_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetNotesByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetNoteById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateNote_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteNote_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateNote_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueueAssignmentsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateQueueAssignemnt_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateQueueAssignment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueueAssignmentsById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteQueueAssignment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueuesByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateQueue_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueueById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateQueue_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteQueue_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetQueueByName_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetTasksByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetTaskById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteTask_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_FetchTaskFromQueueAssignment_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetUsersByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateUser_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetUserById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateUser_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteUser_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetWorkflowsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetWorkflowById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetWorkflowQueuesById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetXMLTemplateByType_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateXMLTemplate_operation;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'localhost',
        'paths' => [
            '/v1/workflow/actions/accept' => ['post' => [
                'operationId' => 'AcceptTask',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/actions/reject' => ['post' => [
                'operationId' => 'RejectTask',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/actions/suspend' => ['post' => [
                'operationId' => 'SuspendTask',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/actions/route' => ['post' => [
                'operationId' => 'RouteTask',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionRouteModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/actions/override' => ['post' => [
                'operationId' => 'OverrideTask',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/actions/reset' => ['post' => [
                'operationId' => 'ResetTask',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/actions/initialize' => ['post' => [
                'operationId' => 'InitializeEntityWorkflow',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => TRUE,
                    'schema' => ['$ref' => '#/definitions/WorkflowActionInitializeModel']
                ]],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/directory/applications' => ['get' => [
                'operationId' => 'GetAllApplications',
                'parameters' => [],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ApplicationModel']
                ]]]
            ]],
            '/v1/directory/applications/{id}' => ['get' => [
                'operationId' => 'GetApplicationById',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/ApplicationModel']],
                    '404' => []
                ]
            ]],
            '/v1/directory/applications/{name}' => ['get' => [
                'operationId' => 'GetApplicationByName',
                'parameters' => [[
                    'name' => 'name',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'string'
                ]],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/ApplicationModel']],
                    '404' => []
                ]
            ]],
            '/v1/directory/drawers/{drawerID}/groups' => ['get' => [
                'operationId' => 'GetDrawerGroupAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'drawerID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupDrawerModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/groups/{groupID}/drawers' => ['get' => [
                'operationId' => 'GetGroupDrawerAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupDrawerModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/drawers/{drawerID}/groups/{groupID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateDrawerGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupDrawerModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteDrawerGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/groups/{groupID}/drawers/{drawerID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateGroupDrawerAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupDrawerModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteGroupDrawerAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/users/{userID}/groups' => ['get' => [
                'operationId' => 'GetUserGroupAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'userID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupUserModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/groups/{groupID}/users' => ['get' => [
                'operationId' => 'GetGroupUserAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'userID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupUserModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/users/{userID}/groups/{groupID}' => [
                'post' => [
                    'operationId' => 'CreateUserGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupUserModel']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '409' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteUserGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/groups/{groupID}/users/{userID}' => [
                'post' => [
                    'operationId' => 'CreateGroupUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupUserModel']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '409' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteGroupUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/workflow/queues/{queueID}/groups' => ['get' => [
                'operationId' => 'GetQueueGroupAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'queueID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupQueueModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/groups/{groupID}/queues' => ['get' => [
                'operationId' => 'GetGroupQueueAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'queueID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupQueueModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/workflow/queues/{queueID}/groups/{groupID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateQueueGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupQueueModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteQueueGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/groups/{groupID}/queues/{queueID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateGroupQueueAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupQueueModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteGroupQueueAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/applications/{applicationID}/groups' => ['get' => [
                'operationId' => 'GetApplicationGroupAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'applicationID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupApplicationModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/groups/{groupID}/applications' => ['get' => [
                'operationId' => 'GetGroupApplicationAssociations',
                'parameters' => [
                    [
                        'name' => 'groupID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'applicationID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GroupApplicationModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/applications/{applicationID}/groups/{groupID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateApplicationGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupApplicationModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteApplicationGroupAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => [],
                        '500' => []
                    ]
                ]
            ],
            '/v1/directory/groups/{groupID}/applications/{applicationID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateGroupApplicationAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupApplicationModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteGroupApplicationAssociation',
                    'parameters' => [
                        [
                            'name' => 'groupID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => [],
                        '500' => []
                    ]
                ]
            ],
            '/v1/directory/drawers/{drawerID}/users' => ['get' => [
                'operationId' => 'GetDrawerUserAssociations',
                'parameters' => [
                    [
                        'name' => 'userID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'drawerID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/UserDrawerModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/users/{userID}/drawers' => ['get' => [
                'operationId' => 'GetUserDrawerAssociations',
                'parameters' => [
                    [
                        'name' => 'userID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/UserDrawerModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/drawers/{drawerID}/users/{userID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateDrawerUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserDrawerModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteDrawerUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/users/{userID}/drawers/{drawerID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateUserDrawerAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserDrawerModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteUserDrawerAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/workflow/queues/{queueID}/users' => ['get' => [
                'operationId' => 'GetQueueUserAssociations',
                'parameters' => [
                    [
                        'name' => 'userID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'queueID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/UserQueueModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/users/{userID}/queues' => ['get' => [
                'operationId' => 'GetUserQueueAssociations',
                'parameters' => [
                    [
                        'name' => 'userID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'queueID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/UserQueueModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/workflow/queues/{queueID}/users/{userID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateQueueUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserQueueModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteQueueUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/users/{userID}/queues/{queueID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateUserQueueAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserQueueModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteUserQueueAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/applications/{applicationID}/users' => ['get' => [
                'operationId' => 'GetApplicationUserAssociations',
                'parameters' => [
                    [
                        'name' => 'userID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'applicationID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/UserApplicationModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/users/{userID}/applications' => ['get' => [
                'operationId' => 'GetUserApplicationAssociations',
                'parameters' => [
                    [
                        'name' => 'userID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'applicationID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/UserApplicationModel']
                    ]],
                    '403' => []
                ]
            ]],
            '/v1/directory/applications/{applicationID}/users/{userID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateApplicationUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserApplicationModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteApplicationUserAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/users/{userID}/applications/{applicationID}' => [
                'put' => [
                    'operationId' => 'CreateOrUpdateUserApplicationAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserApplicationModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteUserApplicationAssociation',
                    'parameters' => [
                        [
                            'name' => 'userID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'applicationID',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/attachments' => ['get' => [
                'operationId' => 'GetAttachmentsByFilter',
                'parameters' => [
                    [
                        'name' => 'type',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'EntityLink',
                            'WebLink'
                        ]
                    ],
                    [
                        'name' => 'extension',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'minSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    [
                        'name' => 'maxSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'creatorUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'modifierUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minInsertionTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxInsertionTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'PageNumber',
                            'ID',
                            'Type',
                            'InsertionTime',
                            'ModificationTime',
                            'CrossReferenceID',
                            'SubType',
                            'Extension',
                            'Name'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/AttachmentModel']
                ]]]
            ]],
            '/v1/content/attachments/{drawer}/{id}' => [
                'get' => [
                    'operationId' => 'GetAttachmentById',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/AttachmentModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateAttachment',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UpdateAttachmentRequestModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteAttachment',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/attachments/{drawer}/{id}/file' => ['get' => [
                'operationId' => 'GetAttachmentFileContent',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/content/attachments/{drawer}' => ['post' => [
                'operationId' => 'CreateAttachment',
                'parameters' => [[
                    'name' => 'drawer',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '201' => ['schema' => ['$ref' => '#/definitions/AttachmentModel']],
                    '400' => [],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/content/attachments/{drawer}/{id}/archive' => ['put' => [
                'operationId' => 'ArchiveAttachment',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '400' => [],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/content/attachments/{drawer}/{id}/versions' => ['get' => [
                'operationId' => 'GetAttachmentVersionsByFilter',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'version',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'creatorUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'accessorUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minAccessTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxAccessTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minCreationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxCreationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Version',
                            'CreatorUserID',
                            'AccessorUserID',
                            'AccessTime',
                            'CreationTime',
                            'ModificationTime'
                        ]
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/AttachmentVersionModel']
                    ]],
                    '404' => []
                ]
            ]],
            '/v1/content/attachments/{drawer}/{id}/versions/{versionID}' => ['get' => [
                'operationId' => 'GetAttachmentVersionFileContent',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'versionID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => ['type' => 'object']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/content/attachments/{drawer}/{id}/checkout' => [
                'put' => [
                    'operationId' => 'CheckOutAttachment',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '400' => [],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'UndoCheckOutAttachment',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '400' => [],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/attachments/{drawer}/{id}/checkin' => ['put' => [
                'operationId' => 'CheckInAttachment',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '400' => [],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/content/attachments/{drawer}/{id}/rollback/{versionID}' => ['put' => [
                'operationId' => 'RollbackAttachmentVersion',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'versionID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '204' => ['schema' => ['type' => 'object']],
                    '400' => [],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/directory/drawers' => ['get' => [
                'operationId' => 'GetAllDrawers',
                'parameters' => [],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/DrawerModel']
                ]]]
            ]],
            '/v1/directory/drawers/{id}' => [
                'get' => [
                    'operationId' => 'GetDrawerById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/DrawerModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateDrawer',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/DrawerBase']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/directory/drawers/{name}' => ['get' => [
                'operationId' => 'GetDrawerByName',
                'parameters' => [[
                    'name' => 'name',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'string'
                ]],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/DrawerModel']],
                    '404' => []
                ]
            ]],
            '/v1/content/entities' => ['get' => [
                'operationId' => 'GetEntitiesByFilter',
                'parameters' => [
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'type',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'state',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Available',
                            'Locked',
                            'Suspended',
                            'Archived',
                            'Deleted',
                            'Canceled',
                            'Complete',
                            'Reviewed',
                            'ReviewedSuspended',
                            'ReviewedComplete',
                            'Rejected',
                            'RoutingSlipOpen',
                            'ReviewedRoutingSlipOpen'
                        ]
                    ],
                    [
                        'name' => 'referenceCount',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'attachCount',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'noteCount',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'ownerUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'ownerGroupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'creatorUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'creatorGroupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'modifierUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'modifierGroupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minCreationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxCreationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'metadata',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'array',
                        'items' => ['type' => 'object']
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'CreationTime',
                            'ModificationTime',
                            'State',
                            'Name'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/GetEntityBaseResponse']
                ]]]
            ]],
            '/v1/content/entities/{drawer}/{id}' => [
                'get' => [
                    'operationId' => 'GetEntityById',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/EntityModel']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateEntity',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UpdateEntityRequestModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteEntity',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/entities/{drawer}' => ['post' => [
                'operationId' => 'CreateEntity',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertEntityRequestModel']
                    ]
                ],
                'responses' => [
                    '201' => ['schema' => ['$ref' => '#/definitions/EntityModel']],
                    '404' => []
                ]
            ]],
            '/v1/content/entities/{drawer}/{id}/copy' => ['post' => [
                'operationId' => 'CopyEntity',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/EntityContentModel']
                    ]
                ],
                'responses' => [
                    '201' => ['schema' => ['$ref' => '#/definitions/EntityModel']],
                    '404' => []
                ]
            ]],
            '/v1/content/events' => ['get' => [
                'operationId' => 'GetEventsByFilter',
                'parameters' => [
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'type',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Fatal',
                            'Warning',
                            'Info',
                            'Debug',
                            'Process',
                            'RPC',
                            'SQL',
                            'DDE'
                        ]
                    ],
                    [
                        'name' => 'minEventTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxEventTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'eventUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'eventGroupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'category',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Entity',
                            'Profile',
                            'Attachment',
                            'Discussion',
                            'Field',
                            'Workflow'
                        ]
                    ],
                    [
                        'name' => 'class',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Application',
                            'Security',
                            'System'
                        ]
                    ],
                    [
                        'name' => 'operation',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Insert',
                            'Update',
                            'Delete',
                            'Copy',
                            'Lock',
                            'Unlock',
                            'Open',
                            'Close',
                            'Checkout',
                            'Checkin',
                            'View',
                            'Merge',
                            'Split',
                            'Classify',
                            'Null',
                            'OpenWF',
                            'Remove',
                            'ReturnToTop',
                            'ReturnToBottom',
                            'Accept',
                            'Suspend',
                            'Reject',
                            'Route',
                            'Forward',
                            'Reply',
                            'Reassign',
                            'Reset',
                            'Override',
                            'Rollback',
                            'Archive'
                        ]
                    ],
                    [
                        'name' => 'minProcessingTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'maxProcessingTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'EventTime'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/EventModel']
                ]]]
            ]],
            '/v1/content/events/{drawer}/{id}' => ['get' => [
                'operationId' => 'GetEventById',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/EventModel']],
                    '404' => []
                ]
            ]],
            '/v1/content/events/{drawer}' => ['post' => [
                'operationId' => 'CreateEvent',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/EventModel']
                    ]
                ],
                'responses' => [
                    '201' => ['schema' => ['$ref' => '#/definitions/EventModel']],
                    '404' => []
                ]
            ]],
            '/v1/content/extensions' => ['get' => [
                'operationId' => 'GetExtensionsByFilter',
                'parameters' => [
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'profileID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'iD',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'type',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'RowNumber',
                            'ID',
                            'Type',
                            'String',
                            'Integer',
                            'Double',
                            'Date'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ExtensionModel']
                ]]]
            ]],
            '/v1/content/flows' => ['get' => [
                'operationId' => 'GetFlowsByFilter',
                'parameters' => [
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'type',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Workflow',
                            'Fatal',
                            'Warning',
                            'Info',
                            'Debug',
                            'Process',
                            'Rpc',
                            'Sql',
                            'Dde'
                        ]
                    ],
                    [
                        'name' => 'queueID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minWorkflowTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxWorkflowTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minInsertionTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxInsertionTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'workflowUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'workflowGroupID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'operation',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Update',
                            'Reset',
                            'Override',
                            'Null'
                        ]
                    ],
                    [
                        'name' => 'category',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Direct',
                            'AdHoc',
                            'Production',
                            'Review',
                            'Reset',
                            'RoutingSlip',
                            'ReviewRoutingSlip',
                            'Override'
                        ]
                    ],
                    [
                        'name' => 'status',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Approved',
                            'Rejected',
                            'Suspended',
                            'ApprovedR',
                            'NoneR'
                        ]
                    ],
                    [
                        'name' => 'state',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Processed',
                            'Pending',
                            'Waiting',
                            'ProcessedR',
                            'Override',
                            'OverrideR',
                            'WaitingR'
                        ]
                    ],
                    [
                        'name' => 'minIndex1',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'maxIndex1',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minIndex2',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'maxIndex2',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'QueueID',
                            'WorkflowTime',
                            'InsertionTime',
                            'Index'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/FlowModel']
                ]]]
            ]],
            '/v1/content/flows/{drawer}/{id}' => ['get' => [
                'operationId' => 'GetFlowById',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/FlowModel']],
                    '404' => []
                ]
            ]],
            '/v1/template/ftl' => [
                'get' => [
                    'operationId' => 'GetTemplatesByFilter',
                    'parameters' => [
                        [
                            'name' => 'drawerID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'category',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'page',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'pageSize',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'sortOrder',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Ascending',
                                'Descending'
                            ]
                        ],
                        [
                            'name' => 'sortBy',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/EntityDefinitionModel']
                    ]]]
                ],
                'post' => [
                    'operationId' => 'CreateTemplate',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/EntityDefinitionBase']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/EntityDefinitionModel']],
                        '403' => [],
                        '404' => [],
                        '409' => []
                    ]
                ]
            ],
            '/v1/template/ftl/{type}' => [
                'get' => [
                    'operationId' => 'GetTemplateByType',
                    'parameters' => [[
                        'name' => 'type',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/EntityDefinitionModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateTemplateByType',
                    'parameters' => [
                        [
                            'name' => 'type',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UpdateEntityDefinitionRequestModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteTemplateByType',
                    'parameters' => [[
                        'name' => 'type',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/template/ftl/{id}' => [
                'get' => [
                    'operationId' => 'GetTemplateById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/EntityDefinitionModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateTemplateById',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UpdateEntityDefinitionRequestModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteTemplateById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/template/ftl/{type}/validate/{fieldID}' => ['get' => [
                'operationId' => 'ValidateTemplateField',
                'parameters' => [
                    [
                        'name' => 'type',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'fieldID',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'sortColumn',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'metadata',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'array',
                        'items' => ['type' => 'object']
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/FieldValidationModel']],
                    '404' => []
                ]
            ]],
            '/v1/directory/groups' => [
                'get' => [
                    'operationId' => 'GetGroupsByFilter',
                    'parameters' => [
                        [
                            'name' => 'iD',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'userID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'type',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Generic',
                                'Access',
                                'Role'
                            ]
                        ],
                        [
                            'name' => 'state',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Inactive',
                                'Active'
                            ]
                        ],
                        [
                            'name' => 'page',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'pageSize',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'sortOrder',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Ascending',
                                'Descending'
                            ]
                        ],
                        [
                            'name' => 'sortBy',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'ID',
                                'Name',
                                'Type',
                                'State'
                            ]
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => [
                            'type' => 'array',
                            'items' => ['$ref' => '#/definitions/GroupModel']
                        ]],
                        '403' => []
                    ]
                ],
                'post' => [
                    'operationId' => 'CreateGroup',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertGroupRequestModel']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/GroupModel']],
                        '403' => [],
                        '409' => []
                    ]
                ]
            ],
            '/v1/directory/groups/{id}' => [
                'get' => [
                    'operationId' => 'GetGroupById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/GroupModel']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateGroup',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/GroupBase']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => [],
                        '500' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteGroup',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => [],
                        '500' => []
                    ]
                ]
            ],
            '/v1/content/links' => ['get' => [
                'operationId' => 'GetLinksByFilter',
                'parameters' => [
                    [
                        'name' => 'childEntityID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'childDrawerID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'childType',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'acl',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'creatorUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'modifierUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minInsertionTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxInsertionTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'PageNumber',
                            'ID',
                            'Type',
                            'InsertionTime',
                            'ModificationTime',
                            'CrossReferenceID',
                            'SubType',
                            'Extension',
                            'Name'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/EntityLinkModel']
                ]]]
            ]],
            '/v1/content/links/{drawer}/{id}' => [
                'get' => [
                    'operationId' => 'GetLinkById',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/EntityLinkModel']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateLink',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UpdateEntityLinkRequestModel']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteLink',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/links/{drawer}' => ['post' => [
                'operationId' => 'CreateLink',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertEntityLinkRequestModel']
                    ]
                ],
                'responses' => [
                    '201' => ['schema' => ['$ref' => '#/definitions/EntityLinkModel']],
                    '403' => [],
                    '404' => [],
                    '409' => []
                ]
            ]],
            '/v1/content/entities/{drawer}/{id}/locks' => [
                'get' => [
                    'operationId' => 'GetLocksByFilter',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/LockModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'CreateOrUpdateLock',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UpdateLockRequestModel']
                        ]
                    ],
                    'responses' => [
                        '201' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteLock',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/notes' => ['get' => [
                'operationId' => 'GetNotesByFilter',
                'parameters' => [
                    [
                        'name' => 'drawerID',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'creatorUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'modifierUserID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'minCreationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxCreationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'minModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'maxModificationTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'parentID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'EntityID',
                            'Name',
                            'CreationTime',
                            'ModificationTime'
                        ]
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/NoteModel']
                ]]]
            ]],
            '/v1/content/notes/{drawer}/{id}' => [
                'get' => [
                    'operationId' => 'GetNoteById',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/NoteModel']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateNote',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/NoteBase']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteNote',
                    'parameters' => [
                        [
                            'name' => 'drawer',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/content/notes/{drawer}' => ['post' => [
                'operationId' => 'CreateNote',
                'parameters' => [
                    [
                        'name' => 'drawer',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertNoteRequestModel']
                    ]
                ],
                'responses' => [
                    '201' => ['schema' => ['$ref' => '#/definitions/NoteModel']],
                    '403' => [],
                    '404' => []
                ]
            ]],
            '/v1/workflow/assignments' => [
                'get' => [
                    'operationId' => 'GetQueueAssignmentsByFilter',
                    'parameters' => [
                        [
                            'name' => 'queueID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'userID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'groupID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'type',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Primary',
                                'Secondary'
                            ]
                        ],
                        [
                            'name' => 'order',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'taskSortColumn',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'TaskID',
                                'QueueID',
                                'DrawerID',
                                'AddressID',
                                'ObjectID',
                                'ObjectType',
                                'State',
                                'Priority',
                                'Description',
                                'Message1',
                                'Message2',
                                'Message3',
                                'Message4',
                                'Message5',
                                'OwnerUserID',
                                'OwnerGroupID',
                                'EffectiveUserID',
                                'EffectiveGroupID',
                                'PreviousQueueID',
                                'NextQueueID',
                                'InsertionTime',
                                'ResolutionTime',
                                'TaskFileAttachment',
                                'ReservedInt1',
                                'ReservedString1'
                            ]
                        ],
                        [
                            'name' => 'state',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Inactive',
                                'Active'
                            ]
                        ],
                        [
                            'name' => 'fetchType',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Manual',
                                'Push'
                            ]
                        ],
                        [
                            'name' => 'page',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'pageSize',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'sortOrder',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Ascending',
                                'Descending'
                            ]
                        ],
                        [
                            'name' => 'sortBy',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'QueueID',
                                'UserID',
                                'GroupID',
                                'Type',
                                'State',
                                'Order',
                                'FetchType'
                            ]
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => [
                            'type' => 'array',
                            'items' => ['$ref' => '#/definitions/QueueAssignmentModel']
                        ]],
                        '403' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateQueueAssignemnt',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/QueueAssignmentModel']
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'post' => [
                    'operationId' => 'CreateQueueAssignment',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertQueueAssignmentRequestModel']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/QueueAssignmentModel']],
                        '403' => [],
                        '404' => [],
                        '409' => []
                    ]
                ]
            ],
            '/v1/workflow/assignments/users/{userId}/queues/{queueId}' => [
                'get' => [
                    'operationId' => 'GetQueueAssignmentsById',
                    'parameters' => [
                        [
                            'name' => 'userId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/QueueAssignmentModel']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteQueueAssignment',
                    'parameters' => [
                        [
                            'name' => 'userId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/workflow/queues' => [
                'get' => [
                    'operationId' => 'GetQueuesByFilter',
                    'parameters' => [
                        [
                            'name' => 'iD',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'alias',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'type',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Inbound',
                                'Outbound',
                                'Access',
                                'Any',
                                'Shared',
                                'Public',
                                'Recycle',
                                'Fax',
                                'Print',
                                'Scan',
                                'Ocr',
                                'Workflow',
                                'Schedule',
                                'System',
                                'Other',
                                'CdoInfostore',
                                'CdoFolder'
                            ]
                        ],
                        [
                            'name' => 'access',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'bypassSecurity',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'boolean'
                        ],
                        [
                            'name' => 'page',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'pageSize',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'sortOrder',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Ascending',
                                'Descending'
                            ]
                        ],
                        [
                            'name' => 'sortBy',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'ID',
                                'Type',
                                'Name',
                                'Alias'
                            ]
                        ]
                    ],
                    'responses' => ['200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/QueueModel']
                    ]]]
                ],
                'post' => [
                    'operationId' => 'CreateQueue',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertQueueRequestModel']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/QueueModel']],
                        '403' => []
                    ]
                ]
            ],
            '/v1/workflow/queues/{id}' => [
                'get' => [
                    'operationId' => 'GetQueueById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/QueueModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateQueue',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/QueueBase']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteQueue',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/workflow/queues/{name}' => ['get' => [
                'operationId' => 'GetQueueByName',
                'parameters' => [[
                    'name' => 'name',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'string'
                ]],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/QueueModel']],
                    '404' => []
                ]
            ]],
            '/v1/workflow/tasks' => [
                'get' => [
                    'operationId' => 'GetTasksByFilter',
                    'parameters' => [
                        [
                            'name' => 'lastTaskID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'iD',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'type',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'queueType',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'drawerID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'description',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'taskID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'page',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'pageSize',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'sortOrder',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Ascending',
                                'Descending'
                            ]
                        ],
                        [
                            'name' => 'sortBy',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'TaskID',
                                'QueueID',
                                'ObjectID',
                                'Priority',
                                'Description',
                                'InsertionTime',
                                'ResolutionTime',
                                'ReservedInt1'
                            ]
                        ]
                    ],
                    'responses' => ['200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/TaskModel']
                    ]]]
                ],
                'post' => [
                    'operationId' => 'CreateTask',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertTaskRequestModel']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => [],
                        '409' => []
                    ]
                ]
            ],
            '/v1/workflow/tasks/{id}' => [
                'get' => [
                    'operationId' => 'GetTaskById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/TaskModel']],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateTask',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/TaskBase']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteTask',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/workflow/tasks/fetch' => ['get' => [
                'operationId' => 'FetchTaskFromQueueAssignment',
                'parameters' => [],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/TaskModel']],
                    '404' => []
                ]
            ]],
            '/v1/directory/users' => [
                'get' => [
                    'operationId' => 'GetUsersByFilter',
                    'parameters' => [
                        [
                            'name' => 'iD',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'primaryGroupID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'groupID',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'groupName',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'username',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'type',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'ImageDesk',
                                'PublishDesk',
                                'FaxDesk',
                                'CaptureDesk',
                                'RecognitionDesk',
                                'PortalUser',
                                'AdminDesk',
                                'WorkflowDesk',
                                'Benchmark',
                                'ReportDesk',
                                'ColdDesk',
                                'PortalDesk',
                                'WorkflowArchitect',
                                'DocumentDesk',
                                'Poweruser'
                            ]
                        ],
                        [
                            'name' => 'state',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Active',
                                'Inactive'
                            ]
                        ],
                        [
                            'name' => 'fullName',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'page',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'pageSize',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'sortOrder',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'Unspecified',
                                'Ascending',
                                'Descending'
                            ]
                        ],
                        [
                            'name' => 'sortBy',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string',
                            'enum' => [
                                'ID',
                                'PrimaryGroupID',
                                'Username',
                                'UserFullName',
                                'Type',
                                'State'
                            ]
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => [
                            'type' => 'array',
                            'items' => ['$ref' => '#/definitions/UserModel']
                        ]],
                        '403' => []
                    ]
                ],
                'post' => [
                    'operationId' => 'CreateUser',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/InsertUserRequestModel']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/UserModel']],
                        '403' => [],
                        '409' => []
                    ]
                ]
            ],
            '/v1/directory/users/{id}' => [
                'get' => [
                    'operationId' => 'GetUserById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/UserModel']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateUser',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserBase']
                        ]
                    ],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteUser',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '204' => ['schema' => ['type' => 'object']],
                        '403' => [],
                        '404' => []
                    ]
                ]
            ],
            '/v1/workflow/workflows' => ['get' => [
                'operationId' => 'GetWorkflowsByFilter',
                'parameters' => [
                    [
                        'name' => 'applicationID',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'entityType',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'page',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'pageSize',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'sortOrder',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    [
                        'name' => 'sortBy',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => ['200' => ['schema' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/WorkflowModel']
                ]]]
            ]],
            '/v1/workflow/workflows/{id}' => ['get' => [
                'operationId' => 'GetWorkflowById',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/WorkflowModel']],
                    '404' => []
                ]
            ]],
            '/v1/workflow/workflows/{id}/queue' => ['get' => [
                'operationId' => 'GetWorkflowQueuesById',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/WorkflowQueueModel']
                    ]],
                    '404' => []
                ]
            ]],
            '/v1/template/xml/{type}' => ['get' => [
                'operationId' => 'GetXMLTemplateByType',
                'parameters' => [[
                    'name' => 'type',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '200' => ['schema' => ['type' => 'string']],
                    '404' => []
                ]
            ]],
            '/v1/template/xml' => ['post' => [
                'operationId' => 'CreateXMLTemplate',
                'parameters' => [],
                'responses' => [
                    '201' => ['schema' => ['type' => 'string']],
                    '409' => [],
                    '400' => [],
                    '403' => []
                ]
            ]]
        ],
        'definitions' => [
            'WorkflowActionModel' => [
                'properties' => [
                    'TaskID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TargetID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueName' => ['type' => 'string'],
                    'Source' => ['type' => 'string'],
                    'Computer' => ['type' => 'string'],
                    'IPAddress' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'WorkflowActionRouteModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'KeepOriginalTask' => ['type' => 'boolean'],
                    'TaskID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TargetID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueName' => ['type' => 'string'],
                    'Source' => ['type' => 'string'],
                    'Computer' => ['type' => 'string'],
                    'IPAddress' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'WorkflowActionInitializeModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueID' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'QueueName' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'Source' => ['type' => 'string'],
                    'Computer' => ['type' => 'string'],
                    'IPAddress' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ApplicationModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetAssociationRequestModel' => [
                'properties' => [
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'DrawerID',
                            'ApplicationID',
                            'GroupID',
                            'UserID',
                            'QueueID',
                            'Acl'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GroupDrawerModel' => [
                'properties' => [
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupName' => ['type' => 'string'],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerName' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GroupUserModel' => [
                'properties' => [
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupName' => ['type' => 'string'],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserFullName' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GroupQueueModel' => [
                'properties' => [
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupName' => ['type' => 'string'],
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueName' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GroupApplicationModel' => [
                'properties' => [
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupName' => ['type' => 'string'],
                    'ApplicationID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ApplicationName' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UserDrawerModel' => [
                'properties' => [
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserFullName' => ['type' => 'string'],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerName' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UserQueueModel' => [
                'properties' => [
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserFullName' => ['type' => 'string'],
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueName' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UserApplicationModel' => [
                'properties' => [
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserFullName' => ['type' => 'string'],
                    'ApplicationID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ApplicationName' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetAttachmentRequestModel' => [
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'EntityLink',
                            'WebLink'
                        ]
                    ],
                    'Extension' => ['type' => 'string'],
                    'MinSize' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'MaxSize' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinInsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxInsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'PageNumber',
                            'ID',
                            'Type',
                            'InsertionTime',
                            'ModificationTime',
                            'CrossReferenceID',
                            'SubType',
                            'Extension',
                            'Name'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'AttachmentModel' => [
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'EntityLink',
                            'WebLink'
                        ]
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'Extension' => ['type' => 'string'],
                    'FileName' => ['type' => 'string'],
                    'Version' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Release' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Category' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'IncluderUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'IncluderUserFullName' => ['type' => 'string'],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserFullName' => ['type' => 'string'],
                    'InsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Class' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'MaxStates',
                            'Reserved',
                            'UserDefined',
                            'Dynamic',
                            'Static',
                            'New',
                            'CheckedOut',
                            'Internal',
                            'Statres5',
                            'Linked',
                            'Statres4',
                            'Statres3',
                            'Statres2',
                            'Statres1',
                            'Locked',
                            'OnServerCache',
                            'OnClientCache',
                            'Fetching',
                            'Dynres4',
                            'Dynres3',
                            'Dynres2',
                            'Dynres1',
                            'User1',
                            'User2',
                            'User3',
                            'User4',
                            'User5',
                            'User6',
                            'User7',
                            'User8',
                            'User9',
                            'User10',
                            'User11',
                            'User12',
                            'User13',
                            'User14',
                            'User15',
                            'User16'
                        ]
                    ],
                    'Note' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UpdateAttachmentRequestModel' => [
                'properties' => [
                    'Category' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Class' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'MaxStates',
                            'Reserved',
                            'UserDefined',
                            'Dynamic',
                            'Static',
                            'New',
                            'CheckedOut',
                            'Internal',
                            'Statres5',
                            'Linked',
                            'Statres4',
                            'Statres3',
                            'Statres2',
                            'Statres1',
                            'Locked',
                            'OnServerCache',
                            'OnClientCache',
                            'Fetching',
                            'Dynres4',
                            'Dynres3',
                            'Dynres2',
                            'Dynres1',
                            'User1',
                            'User2',
                            'User3',
                            'User4',
                            'User5',
                            'User6',
                            'User7',
                            'User8',
                            'User9',
                            'User10',
                            'User11',
                            'User12',
                            'User13',
                            'User14',
                            'User15',
                            'User16'
                        ]
                    ],
                    'Note' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetAttachmentVersionRequestModel' => [
                'properties' => [
                    'Version' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AccessorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinAccessTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxAccessTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinCreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxCreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'Version',
                            'CreatorUserID',
                            'AccessorUserID',
                            'AccessTime',
                            'CreationTime',
                            'ModificationTime'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'AttachmentVersionModel' => [
                'properties' => [
                    'Version' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AccessorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AccessTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'CreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Comment' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt3' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt4' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'DrawerModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CabinetID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserFullName' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'Edition' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'State' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'DrawerBase' => [
                'properties' => [
                    'Name' => ['type' => 'string'],
                    'Edition' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'State' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'GetProfileFieldRequestModel' => [
                'properties' => [
                    'ProfileType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'FieldType' => [
                        'type' => 'string',
                        'enum' => [
                            'String',
                            'Integer',
                            'Double',
                            'DateTime'
                        ]
                    ],
                    'FieldIndex' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'FieldValue' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'ProfileType',
                    'FieldType',
                    'FieldIndex',
                    'FieldValue'
                ]
            ],
            'GetEntityRequestModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Available',
                            'Locked',
                            'Suspended',
                            'Archived',
                            'Deleted',
                            'Canceled',
                            'Complete',
                            'Reviewed',
                            'ReviewedSuspended',
                            'ReviewedComplete',
                            'Rejected',
                            'RoutingSlipOpen',
                            'ReviewedRoutingSlipOpen'
                        ]
                    ],
                    'ReferenceCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinCreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxCreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Metadata' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GetProfileFieldRequestModel']
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'CreationTime',
                            'ModificationTime',
                            'State',
                            'Name'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => ['DrawerID']
            ],
            'GetEntityBaseResponse' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Subtype' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Age' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReferenceCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AccessCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ProfileCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorUserFullName' => ['type' => 'string'],
                    'CreatorGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorGroupName' => ['type' => 'string'],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserFullName' => ['type' => 'string'],
                    'ModifierGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierGroupName' => ['type' => 'string'],
                    'CreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'AccessTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ResolutionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Category' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Available',
                            'Locked',
                            'Suspended',
                            'Archived',
                            'Deleted',
                            'Canceled',
                            'Complete',
                            'Reviewed',
                            'ReviewedSuspended',
                            'ReviewedComplete',
                            'Rejected',
                            'RoutingSlipOpen',
                            'ReviewedRoutingSlipOpen'
                        ]
                    ],
                    'Name' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ExtensionModel' => [
                'properties' => [
                    'UpdateAction' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Update',
                            'Add',
                            'Remove'
                        ]
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ProfileID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'RowNumber' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Strings' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'Integers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'Doubles' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'number',
                            'format' => 'double'
                        ]
                    ],
                    'Dates' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'format' => 'date-time'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ProfileModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ExtensionCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserFullName' => ['type' => 'string'],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Strings' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'Integers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'Doubles' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'number',
                            'format' => 'double'
                        ]
                    ],
                    'Dates' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'format' => 'date-time'
                        ]
                    ],
                    'Extensions' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ExtensionModel']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'EntityModel' => [
                'properties' => [
                    'Profiles' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ProfileModel']
                    ],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Subtype' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Age' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReferenceCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AccessCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ProfileCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorUserFullName' => ['type' => 'string'],
                    'CreatorGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorGroupName' => ['type' => 'string'],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserFullName' => ['type' => 'string'],
                    'ModifierGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierGroupName' => ['type' => 'string'],
                    'CreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'AccessTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ResolutionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Category' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Available',
                            'Locked',
                            'Suspended',
                            'Archived',
                            'Deleted',
                            'Canceled',
                            'Complete',
                            'Reviewed',
                            'ReviewedSuspended',
                            'ReviewedComplete',
                            'Rejected',
                            'RoutingSlipOpen',
                            'ReviewedRoutingSlipOpen'
                        ]
                    ],
                    'Name' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UpdateEntityRequestModel' => [
                'properties' => [
                    'Profiles' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ProfileModel']
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Available',
                            'Locked',
                            'Suspended',
                            'Archived',
                            'Deleted',
                            'Canceled',
                            'Complete',
                            'Reviewed',
                            'ReviewedSuspended',
                            'ReviewedComplete',
                            'Rejected',
                            'RoutingSlipOpen',
                            'ReviewedRoutingSlipOpen'
                        ]
                    ],
                    'Name' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertEntityRequestModel' => [
                'properties' => [
                    'Profiles' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ProfileModel']
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'EntityContentModel' => [
                'properties' => ['EntityContent' => [
                    'type' => 'string',
                    'enum' => [
                        'None',
                        'All',
                        'Profiles',
                        'Attachments',
                        'Notes',
                        'Links',
                        'Events'
                    ]
                ]],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetEventRequestModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Fatal',
                            'Warning',
                            'Info',
                            'Debug',
                            'Process',
                            'RPC',
                            'SQL',
                            'DDE'
                        ]
                    ],
                    'MinEventTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxEventTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'EventUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EventGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Category' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Entity',
                            'Profile',
                            'Attachment',
                            'Discussion',
                            'Field',
                            'Workflow'
                        ]
                    ],
                    'Class' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Application',
                            'Security',
                            'System'
                        ]
                    ],
                    'Operation' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Insert',
                            'Update',
                            'Delete',
                            'Copy',
                            'Lock',
                            'Unlock',
                            'Open',
                            'Close',
                            'Checkout',
                            'Checkin',
                            'View',
                            'Merge',
                            'Split',
                            'Classify',
                            'Null',
                            'OpenWF',
                            'Remove',
                            'ReturnToTop',
                            'ReturnToBottom',
                            'Accept',
                            'Suspend',
                            'Reject',
                            'Route',
                            'Forward',
                            'Reply',
                            'Reassign',
                            'Reset',
                            'Override',
                            'Rollback',
                            'Archive'
                        ]
                    ],
                    'MinProcessingTime' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MaxProcessingTime' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'EventTime'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'DrawerID',
                    'EntityID'
                ]
            ],
            'EventModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Fatal',
                            'Warning',
                            'Info',
                            'Debug',
                            'Process',
                            'RPC',
                            'SQL',
                            'DDE'
                        ]
                    ],
                    'EventTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'EventUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EventUserFullName' => ['type' => 'string'],
                    'EventGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EventGroupName' => ['type' => 'string'],
                    'Category' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Entity',
                            'Profile',
                            'Attachment',
                            'Discussion',
                            'Field',
                            'Workflow'
                        ]
                    ],
                    'Class' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Application',
                            'Security',
                            'System'
                        ]
                    ],
                    'Operation' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'Insert',
                            'Update',
                            'Delete',
                            'Copy',
                            'Lock',
                            'Unlock',
                            'Open',
                            'Close',
                            'Checkout',
                            'Checkin',
                            'View',
                            'Merge',
                            'Split',
                            'Classify',
                            'Null',
                            'OpenWF',
                            'Remove',
                            'ReturnToTop',
                            'ReturnToBottom',
                            'Accept',
                            'Suspend',
                            'Reject',
                            'Route',
                            'Forward',
                            'Reply',
                            'Reassign',
                            'Reset',
                            'Override',
                            'Rollback',
                            'Archive'
                        ]
                    ],
                    'Source' => ['type' => 'string'],
                    'Computer' => ['type' => 'string'],
                    'IPAddress' => ['type' => 'string'],
                    'Description' => ['type' => 'string'],
                    'ProcessTime' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Details' => ['type' => 'object']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetExtensionRequestModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ProfileID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'RowNumber',
                            'ID',
                            'Type',
                            'String',
                            'Integer',
                            'Double',
                            'Date'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'DrawerID',
                    'EntityID',
                    'ProfileID'
                ]
            ],
            'GetFlowRequestModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Workflow',
                            'Fatal',
                            'Warning',
                            'Info',
                            'Debug',
                            'Process',
                            'Rpc',
                            'Sql',
                            'Dde'
                        ]
                    ],
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinWorkflowTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxWorkflowTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinInsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxInsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'WorkflowUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'WorkflowGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Operation' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Update',
                            'Reset',
                            'Override',
                            'Null'
                        ]
                    ],
                    'Category' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Direct',
                            'AdHoc',
                            'Production',
                            'Review',
                            'Reset',
                            'RoutingSlip',
                            'ReviewRoutingSlip',
                            'Override'
                        ]
                    ],
                    'Status' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Approved',
                            'Rejected',
                            'Suspended',
                            'ApprovedR',
                            'NoneR'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Processed',
                            'Pending',
                            'Waiting',
                            'ProcessedR',
                            'Override',
                            'OverrideR',
                            'WaitingR'
                        ]
                    ],
                    'MinIndex1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MaxIndex1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinIndex2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MaxIndex2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'QueueID',
                            'WorkflowTime',
                            'InsertionTime',
                            'Index'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'DrawerID',
                    'EntityID'
                ]
            ],
            'FlowModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Workflow',
                            'Fatal',
                            'Warning',
                            'Info',
                            'Debug',
                            'Process',
                            'Rpc',
                            'Sql',
                            'Dde'
                        ]
                    ],
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'WorkflowTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'InsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'WorkflowUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'WorkflowUserFullName' => ['type' => 'string'],
                    'WorkflowGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'WorkflowGroupName' => ['type' => 'string'],
                    'Operation' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Update',
                            'Reset',
                            'Override',
                            'Null'
                        ]
                    ],
                    'Category' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Direct',
                            'AdHoc',
                            'Production',
                            'Review',
                            'Reset',
                            'RoutingSlip',
                            'ReviewRoutingSlip',
                            'Override'
                        ]
                    ],
                    'Status' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Approved',
                            'Rejected',
                            'Suspended',
                            'ApprovedR',
                            'NoneR'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Processed',
                            'Pending',
                            'Waiting',
                            'ProcessedR',
                            'Override',
                            'OverrideR',
                            'WaitingR'
                        ]
                    ],
                    'Source' => ['type' => 'string'],
                    'IPAddress' => ['type' => 'string'],
                    'Computer' => ['type' => 'string'],
                    'Description' => ['type' => 'string'],
                    'Index1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Index2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetDefinitionModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Category' => ['type' => 'string'],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ItemDefinitionModel' => [
                'properties' => [
                    'ID' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'Value' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'ComboBoxItem',
                            'ListBoxItem',
                            'RadioButton',
                            'ForwardAction',
                            'ReplyAction'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Name',
                    'Value',
                    'Type'
                ]
            ],
            'FieldDefinitionModel' => [
                'properties' => [
                    'ID' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'XmlTag' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'String',
                            'Integer',
                            'Double',
                            'DateTime',
                            'Paragraph',
                            'CheckBox',
                            'RadioButton',
                            'ComboBox',
                            'ListBox',
                            'Table',
                            'LargeText',
                            'ComboString'
                        ]
                    ],
                    'Index' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Position' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Note' => ['type' => 'string'],
                    'IsEnabled' => ['type' => 'boolean'],
                    'IsRequired' => [
                        'type' => 'string',
                        'enum' => [
                            'NotRequired',
                            'Always',
                            'OnAccept'
                        ]
                    ],
                    'IsProtected' => ['type' => 'boolean'],
                    'Default' => ['type' => 'string'],
                    'Mask' => ['type' => 'string'],
                    'Length' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'IsMultiline' => ['type' => 'boolean'],
                    'Format' => ['type' => 'string'],
                    'IsSorted' => ['type' => 'boolean'],
                    'Select' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Formula' => ['type' => 'string'],
                    'HasValidation' => ['type' => 'boolean'],
                    'ValidationColumn' => ['type' => 'string'],
                    'FoundOperation' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NotFoundOperation' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SampleImage' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Lookup' => ['type' => 'string'],
                    'HasLink' => ['type' => 'boolean'],
                    'LinkEntityType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'LinkProfile' => ['type' => 'string'],
                    'LinkField' => ['type' => 'string'],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedBit1' => ['type' => 'boolean'],
                    'ReservedBit2' => ['type' => 'boolean'],
                    'Items' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ItemDefinitionModel']
                    ],
                    'Fields' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/FieldDefinitionModel']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Name',
                    'Type',
                    'Index',
                    'Position'
                ]
            ],
            'ProfileDefinitionModel' => [
                'properties' => [
                    'ID' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Fields' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/FieldDefinitionModel']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Type',
                    'Name'
                ]
            ],
            'EntityDefinitionModel' => [
                'properties' => [
                    'ID' => ['type' => 'string'],
                    'CreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Category' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'HasClass' => ['type' => 'boolean'],
                    'HasSecurity' => ['type' => 'boolean'],
                    'HasProfiles' => ['type' => 'boolean'],
                    'HasItems' => ['type' => 'boolean'],
                    'SmallImage' => ['type' => 'string'],
                    'LargeImage' => ['type' => 'string'],
                    'HasAudit' => ['type' => 'boolean'],
                    'AllowsViewImages' => ['type' => 'boolean'],
                    'IsReviewState' => ['type' => 'boolean'],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Drawers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'Profiles' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ProfileDefinitionModel']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Type',
                    'Category',
                    'Name'
                ]
            ],
            'EntityDefinitionBase' => [
                'properties' => [
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Category' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'HasClass' => ['type' => 'boolean'],
                    'HasSecurity' => ['type' => 'boolean'],
                    'HasProfiles' => ['type' => 'boolean'],
                    'HasItems' => ['type' => 'boolean'],
                    'SmallImage' => ['type' => 'string'],
                    'LargeImage' => ['type' => 'string'],
                    'HasAudit' => ['type' => 'boolean'],
                    'AllowsViewImages' => ['type' => 'boolean'],
                    'IsReviewState' => ['type' => 'boolean'],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Drawers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32'
                        ]
                    ],
                    'Profiles' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ProfileDefinitionModel']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Type',
                    'Category',
                    'Name'
                ]
            ],
            'UpdateEntityDefinitionRequestModel' => [
                'properties' => [
                    'Category' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'SmallImage' => ['type' => 'string'],
                    'LargeImage' => ['type' => 'string'],
                    'HasAudit' => ['type' => 'boolean'],
                    'AllowsViewImages' => ['type' => 'boolean'],
                    'IsReviewState' => ['type' => 'boolean'],
                    'Profiles' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ProfileDefinitionModel']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetLookupFieldModel' => [
                'properties' => [
                    'ColumnName' => ['type' => 'string'],
                    'ColumnValue' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetFieldValidationModel' => [
                'properties' => [
                    'SortColumn' => ['type' => 'string'],
                    'Metadata' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GetLookupFieldModel']
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'LookupField' => [
                'properties' => [
                    'Column' => ['type' => 'string'],
                    'ProfileIndex' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'FieldIndex' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ExtensionIndex' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'FieldValidationModel' => [
                'properties' => [
                    'Lookup' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/LookupField']
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'additionalProperties' => ['type' => 'string']
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetGroupRequestModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Generic',
                            'Access',
                            'Role'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Name',
                            'Type',
                            'State'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GroupModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Generic',
                            'Access',
                            'Role'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'InsertGroupRequestModel' => [
                'properties' => [
                    'Name' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Generic',
                            'Access',
                            'Role'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'GroupBase' => [
                'properties' => [
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Generic',
                            'Access',
                            'Role'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'GetEntityLinkRequestModel' => [
                'properties' => [
                    'ChildEntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ChildDrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ChildType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinInsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxInsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'PageNumber',
                            'ID',
                            'Type',
                            'InsertionTime',
                            'ModificationTime',
                            'CrossReferenceID',
                            'SubType',
                            'Extension',
                            'Name'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'EntityLinkModel' => [
                'properties' => [
                    'ChildDrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ChildEntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ChildType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'VirtualName' => ['type' => 'string'],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'IncluderUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'IncluderUserFullName' => ['type' => 'string'],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserFullName' => ['type' => 'string'],
                    'InsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Class' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'MaxStates',
                            'Reserved',
                            'UserDefined',
                            'Dynamic',
                            'Static',
                            'New',
                            'CheckedOut',
                            'Internal',
                            'Statres5',
                            'Linked',
                            'Statres4',
                            'Statres3',
                            'Statres2',
                            'Statres1',
                            'Locked',
                            'OnServerCache',
                            'OnClientCache',
                            'Fetching',
                            'Dynres4',
                            'Dynres3',
                            'Dynres2',
                            'Dynres1',
                            'User1',
                            'User2',
                            'User3',
                            'User4',
                            'User5',
                            'User6',
                            'User7',
                            'User8',
                            'User9',
                            'User10',
                            'User11',
                            'User12',
                            'User13',
                            'User14',
                            'User15',
                            'User16'
                        ]
                    ],
                    'Note' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UpdateEntityLinkRequestModel' => [
                'properties' => [
                    'VirtualName' => ['type' => 'string'],
                    'Class' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Undefined',
                            'MaxStates',
                            'Reserved',
                            'UserDefined',
                            'Dynamic',
                            'Static',
                            'New',
                            'CheckedOut',
                            'Internal',
                            'Statres5',
                            'Linked',
                            'Statres4',
                            'Statres3',
                            'Statres2',
                            'Statres1',
                            'Locked',
                            'OnServerCache',
                            'OnClientCache',
                            'Fetching',
                            'Dynres4',
                            'Dynres3',
                            'Dynres2',
                            'Dynres1',
                            'User1',
                            'User2',
                            'User3',
                            'User4',
                            'User5',
                            'User6',
                            'User7',
                            'User8',
                            'User9',
                            'User10',
                            'User11',
                            'User12',
                            'User13',
                            'User14',
                            'User15',
                            'User16'
                        ]
                    ],
                    'Note' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertEntityLinkRequestModel' => [
                'properties' => [
                    'Class' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Note' => ['type' => 'string'],
                    'ChildDrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ChildEntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ChildType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'VirtualName' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['Name']
            ],
            'LockModel' => [
                'properties' => [
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SessionID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserFullName' => ['type' => 'string'],
                    'LockTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ExpirationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ApplicationName' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UpdateLockRequestModel' => [
                'properties' => [
                    'ExpirationDuration' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ApplicationName' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetNoteRequestModel' => [
                'properties' => [
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'MinCreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxCreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MinModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'MaxModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ParentID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'EntityID',
                            'Name',
                            'CreationTime',
                            'ModificationTime'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => ['DrawerID']
            ],
            'NoteModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'CreatorUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'CreatorUserFullName' => ['type' => 'string'],
                    'ModifierUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ModifierUserFullName' => ['type' => 'string'],
                    'CreationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ModificationTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'ParentID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Note' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'NoteBase' => [
                'properties' => [
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Note' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertNoteRequestModel' => [
                'properties' => [
                    'Acl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Note' => ['type' => 'string'],
                    'ParentID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Name',
                    'Note'
                ]
            ],
            'GetQueueAssignmentModel' => [
                'properties' => [
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Primary',
                            'Secondary'
                        ]
                    ],
                    'Order' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TaskSortColumn' => [
                        'type' => 'string',
                        'enum' => [
                            'TaskID',
                            'QueueID',
                            'DrawerID',
                            'AddressID',
                            'ObjectID',
                            'ObjectType',
                            'State',
                            'Priority',
                            'Description',
                            'Message1',
                            'Message2',
                            'Message3',
                            'Message4',
                            'Message5',
                            'OwnerUserID',
                            'OwnerGroupID',
                            'EffectiveUserID',
                            'EffectiveGroupID',
                            'PreviousQueueID',
                            'NextQueueID',
                            'InsertionTime',
                            'ResolutionTime',
                            'TaskFileAttachment',
                            'ReservedInt1',
                            'ReservedString1'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'FetchType' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Manual',
                            'Push'
                        ]
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'QueueID',
                            'UserID',
                            'GroupID',
                            'Type',
                            'State',
                            'Order',
                            'FetchType'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'QueueAssignmentModel' => [
                'properties' => [
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Primary',
                            'Secondary'
                        ]
                    ],
                    'Order' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TaskSortColumn' => [
                        'type' => 'string',
                        'enum' => [
                            'TaskID',
                            'QueueID',
                            'DrawerID',
                            'AddressID',
                            'ObjectID',
                            'ObjectType',
                            'State',
                            'Priority',
                            'Description',
                            'Message1',
                            'Message2',
                            'Message3',
                            'Message4',
                            'Message5',
                            'OwnerUserID',
                            'OwnerGroupID',
                            'EffectiveUserID',
                            'EffectiveGroupID',
                            'PreviousQueueID',
                            'NextQueueID',
                            'InsertionTime',
                            'ResolutionTime',
                            'TaskFileAttachment',
                            'ReservedInt1',
                            'ReservedString1'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'FetchType' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Manual',
                            'Push'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertQueueAssignmentRequestModel' => [
                'properties' => [
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Primary',
                            'Secondary'
                        ]
                    ],
                    'Order' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TaskSortColumn' => [
                        'type' => 'string',
                        'enum' => [
                            'TaskID',
                            'QueueID',
                            'DrawerID',
                            'AddressID',
                            'ObjectID',
                            'ObjectType',
                            'State',
                            'Priority',
                            'Description',
                            'Message1',
                            'Message2',
                            'Message3',
                            'Message4',
                            'Message5',
                            'OwnerUserID',
                            'OwnerGroupID',
                            'EffectiveUserID',
                            'EffectiveGroupID',
                            'PreviousQueueID',
                            'NextQueueID',
                            'InsertionTime',
                            'ResolutionTime',
                            'TaskFileAttachment',
                            'ReservedInt1',
                            'ReservedString1'
                        ]
                    ],
                    'FetchType' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Manual',
                            'Push'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetQueueModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Alias' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Inbound',
                            'Outbound',
                            'Access',
                            'Any',
                            'Shared',
                            'Public',
                            'Recycle',
                            'Fax',
                            'Print',
                            'Scan',
                            'Ocr',
                            'Workflow',
                            'Schedule',
                            'System',
                            'Other',
                            'CdoInfostore',
                            'CdoFolder'
                        ]
                    ],
                    'Access' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'BypassSecurity' => ['type' => 'boolean'],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'Type',
                            'Name',
                            'Alias'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'QueueModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TaskCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Alias' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Inbound',
                            'Outbound',
                            'Access',
                            'Any',
                            'Shared',
                            'Public',
                            'Recycle',
                            'Fax',
                            'Print',
                            'Scan',
                            'Ocr',
                            'Workflow',
                            'Schedule',
                            'System',
                            'Other',
                            'CdoInfostore',
                            'CdoFolder'
                        ]
                    ],
                    'Category' => ['type' => 'string'],
                    'Description' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertQueueRequestModel' => [
                'properties' => [
                    'Name' => ['type' => 'string'],
                    'Alias' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Inbound',
                            'Outbound',
                            'Access',
                            'Any',
                            'Shared',
                            'Public',
                            'Recycle',
                            'Fax',
                            'Print',
                            'Scan',
                            'Ocr',
                            'Workflow',
                            'Schedule',
                            'System',
                            'Other',
                            'CdoInfostore',
                            'CdoFolder'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Name',
                    'Alias',
                    'Type'
                ]
            ],
            'QueueBase' => [
                'properties' => [
                    'Name' => ['type' => 'string'],
                    'Alias' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Inbound',
                            'Outbound',
                            'Access',
                            'Any',
                            'Shared',
                            'Public',
                            'Recycle',
                            'Fax',
                            'Print',
                            'Scan',
                            'Ocr',
                            'Workflow',
                            'Schedule',
                            'System',
                            'Other',
                            'CdoInfostore',
                            'CdoFolder'
                        ]
                    ],
                    'Category' => ['type' => 'string'],
                    'Description' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetTaskModel' => [
                'properties' => [
                    'LastTaskID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Description' => ['type' => 'string'],
                    'TaskID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'TaskID',
                            'QueueID',
                            'ObjectID',
                            'Priority',
                            'Description',
                            'InsertionTime',
                            'ResolutionTime',
                            'ReservedInt1'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'TaskModel' => [
                'properties' => [
                    'TaskID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ObjectID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ObjectType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerUserFullName' => ['type' => 'string'],
                    'OwnerGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'OwnerGroupName' => ['type' => 'string'],
                    'EffectiveUserID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EffectiveUserFullName' => ['type' => 'string'],
                    'EffectiveGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EffectiveGroupName' => ['type' => 'string'],
                    'PrevQueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NextQueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'InsertionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'AddressID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Description' => ['type' => 'string'],
                    'Message1' => ['type' => 'string'],
                    'Message2' => ['type' => 'string'],
                    'Message3' => ['type' => 'string'],
                    'Message4' => ['type' => 'string'],
                    'Message5' => ['type' => 'string'],
                    'Message6' => ['type' => 'string'],
                    'Message7' => ['type' => 'string'],
                    'Message8' => ['type' => 'string'],
                    'Message9' => ['type' => 'string'],
                    'Message10' => ['type' => 'string'],
                    'Message11' => ['type' => 'string'],
                    'Message12' => ['type' => 'string'],
                    'Message13' => ['type' => 'string'],
                    'Message14' => ['type' => 'string'],
                    'Message15' => ['type' => 'string'],
                    'Message16' => ['type' => 'string'],
                    'State' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ResolutionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'TaskFileAttachment' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertTaskRequestModel' => [
                'properties' => [
                    'QueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ObjectID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ObjectType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PrevQueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NextQueueID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AddressID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Description' => ['type' => 'string'],
                    'Message1' => ['type' => 'string'],
                    'Message2' => ['type' => 'string'],
                    'Message3' => ['type' => 'string'],
                    'Message4' => ['type' => 'string'],
                    'Message5' => ['type' => 'string'],
                    'Message6' => ['type' => 'string'],
                    'Message7' => ['type' => 'string'],
                    'Message8' => ['type' => 'string'],
                    'Message9' => ['type' => 'string'],
                    'Message10' => ['type' => 'string'],
                    'Message11' => ['type' => 'string'],
                    'Message12' => ['type' => 'string'],
                    'Message13' => ['type' => 'string'],
                    'Message14' => ['type' => 'string'],
                    'Message15' => ['type' => 'string'],
                    'Message16' => ['type' => 'string'],
                    'State' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ResolutionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'TaskFileAttachment' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'TaskBase' => [
                'properties' => [
                    'AddressID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Description' => ['type' => 'string'],
                    'Message1' => ['type' => 'string'],
                    'Message2' => ['type' => 'string'],
                    'Message3' => ['type' => 'string'],
                    'Message4' => ['type' => 'string'],
                    'Message5' => ['type' => 'string'],
                    'Message6' => ['type' => 'string'],
                    'Message7' => ['type' => 'string'],
                    'Message8' => ['type' => 'string'],
                    'Message9' => ['type' => 'string'],
                    'Message10' => ['type' => 'string'],
                    'Message11' => ['type' => 'string'],
                    'Message12' => ['type' => 'string'],
                    'Message13' => ['type' => 'string'],
                    'Message14' => ['type' => 'string'],
                    'Message15' => ['type' => 'string'],
                    'Message16' => ['type' => 'string'],
                    'State' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ResolutionTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'TaskFileAttachment' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetUserRequestModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PrimaryGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupName' => ['type' => 'string'],
                    'Username' => ['type' => 'string'],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'ImageDesk',
                            'PublishDesk',
                            'FaxDesk',
                            'CaptureDesk',
                            'RecognitionDesk',
                            'PortalUser',
                            'AdminDesk',
                            'WorkflowDesk',
                            'Benchmark',
                            'ReportDesk',
                            'ColdDesk',
                            'PortalDesk',
                            'WorkflowArchitect',
                            'DocumentDesk',
                            'Poweruser'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Active',
                            'Inactive'
                        ]
                    ],
                    'FullName' => ['type' => 'string'],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'string',
                        'enum' => [
                            'ID',
                            'PrimaryGroupID',
                            'Username',
                            'UserFullName',
                            'Type',
                            'State'
                        ]
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'UserModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Username' => ['type' => 'string'],
                    'LoginCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'DrawerCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'GroupCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'QueueCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'LoginTime' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'LastLogin' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'PrimaryGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'ImageDesk',
                            'PublishDesk',
                            'FaxDesk',
                            'CaptureDesk',
                            'RecognitionDesk',
                            'PortalUser',
                            'AdminDesk',
                            'WorkflowDesk',
                            'Benchmark',
                            'ReportDesk',
                            'ColdDesk',
                            'PortalDesk',
                            'WorkflowArchitect',
                            'DocumentDesk',
                            'Poweruser'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Active',
                            'Inactive'
                        ]
                    ],
                    'FullName' => ['type' => 'string'],
                    'ObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'IPAddress' => ['type' => 'string'],
                    'EntityAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AdminMask' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'CabinetAdmin',
                            'DrawerAdmin',
                            'GroupAdmin',
                            'UserAdmin',
                            'WorkflowAdmin',
                            'VersionAdmin',
                            'TemplateAdmin',
                            'ApplicationAdmin'
                        ]
                    ],
                    'Address' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedDouble1' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'ReservedDouble2' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string'],
                    'UserExpiration' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'InsertUserRequestModel' => [
                'properties' => [
                    'Username' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Active',
                            'Inactive'
                        ]
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'ImageDesk',
                            'PublishDesk',
                            'FaxDesk',
                            'CaptureDesk',
                            'RecognitionDesk',
                            'PortalUser',
                            'AdminDesk',
                            'WorkflowDesk',
                            'Benchmark',
                            'ReportDesk',
                            'ColdDesk',
                            'PortalDesk',
                            'WorkflowArchitect',
                            'DocumentDesk',
                            'Poweruser'
                        ]
                    ],
                    'FullName' => ['type' => 'string'],
                    'IPAddress' => ['type' => 'string'],
                    'EntityAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AdminMask' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'CabinetAdmin',
                            'DrawerAdmin',
                            'GroupAdmin',
                            'UserAdmin',
                            'WorkflowAdmin',
                            'VersionAdmin',
                            'TemplateAdmin',
                            'ApplicationAdmin'
                        ]
                    ],
                    'Address' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'Username',
                    'FullName',
                    'IPAddress'
                ]
            ],
            'UserBase' => [
                'properties' => [
                    'PrimaryGroupID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'ImageDesk',
                            'PublishDesk',
                            'FaxDesk',
                            'CaptureDesk',
                            'RecognitionDesk',
                            'PortalUser',
                            'AdminDesk',
                            'WorkflowDesk',
                            'Benchmark',
                            'ReportDesk',
                            'ColdDesk',
                            'PortalDesk',
                            'WorkflowArchitect',
                            'DocumentDesk',
                            'Poweruser'
                        ]
                    ],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Active',
                            'Inactive'
                        ]
                    ],
                    'FullName' => ['type' => 'string'],
                    'ObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'IPAddress' => ['type' => 'string'],
                    'EntityAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteAcl' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AttachmentFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'NoteFeature' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'AdminMask' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'CabinetAdmin',
                            'DrawerAdmin',
                            'GroupAdmin',
                            'UserAdmin',
                            'WorkflowAdmin',
                            'VersionAdmin',
                            'TemplateAdmin',
                            'ApplicationAdmin'
                        ]
                    ],
                    'Address' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedDouble1' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'ReservedDouble2' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string'],
                    'UserExpiration' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'GetWorkflowModel' => [
                'properties' => [
                    'ApplicationID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'EntityType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Page' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'PageSize' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SortOrder' => [
                        'type' => 'string',
                        'enum' => [
                            'Unspecified',
                            'Ascending',
                            'Descending'
                        ]
                    ],
                    'SortBy' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'WorkflowModel' => [
                'properties' => [
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'EntityType' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Alias' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'WorkflowQueueModel' => [
                'properties' => [
                    'WorkflowType' => [
                        'type' => 'string',
                        'enum' => [
                            'Uncategorized',
                            'Auto',
                            'StraightThrough',
                            'Exception',
                            'Holding',
                            'Any'
                        ]
                    ],
                    'Index' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'SubIndex' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ID' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'UserCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'TaskCount' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Name' => ['type' => 'string'],
                    'Alias' => ['type' => 'string'],
                    'State' => [
                        'type' => 'string',
                        'enum' => [
                            'Inactive',
                            'Active'
                        ]
                    ],
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'Inbound',
                            'Outbound',
                            'Access',
                            'Any',
                            'Shared',
                            'Public',
                            'Recycle',
                            'Fax',
                            'Print',
                            'Scan',
                            'Ocr',
                            'Workflow',
                            'Schedule',
                            'System',
                            'Other',
                            'CdoInfostore',
                            'CdoFolder'
                        ]
                    ],
                    'Category' => ['type' => 'string'],
                    'Description' => ['type' => 'string'],
                    'ReservedInt1' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedInt2' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'ReservedString1' => ['type' => 'string'],
                    'ReservedString2' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ]
        ]
    ];
}
