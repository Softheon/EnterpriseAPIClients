/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import org.joda.time.DateTime;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Model for the GET Flow input parameters.
 */
public class GetFlowRequestModel {
    /**
     * Gets or sets the drawer identifier.
     */
    @JsonProperty(value = "DrawerID", required = true)
    private int drawerID;

    /**
     * Gets or sets the entity identifier.
     */
    @JsonProperty(value = "EntityID", required = true)
    private int entityID;

    /**
     * Gets or sets the type. Possible values include: 'None', 'Workflow',
     * 'Fatal', 'Warning', 'Info', 'Debug', 'Process', 'Rpc', 'Sql', 'Dde'.
     */
    @JsonProperty(value = "Type")
    private String type;

    /**
     * Gets or sets the queue identifier.
     */
    @JsonProperty(value = "QueueID")
    private Integer queueID;

    /**
     * Gets or sets the minimum workflow time.
     */
    @JsonProperty(value = "MinWorkflowTime")
    private DateTime minWorkflowTime;

    /**
     * Gets or sets the maximum workflow time.
     */
    @JsonProperty(value = "MaxWorkflowTime")
    private DateTime maxWorkflowTime;

    /**
     * Gets or sets the minimum insertion time.
     */
    @JsonProperty(value = "MinInsertionTime")
    private DateTime minInsertionTime;

    /**
     * Gets or sets the maximum insertion time.
     */
    @JsonProperty(value = "MaxInsertionTime")
    private DateTime maxInsertionTime;

    /**
     * Gets or sets the workflow user identifier.
     */
    @JsonProperty(value = "WorkflowUserID")
    private Integer workflowUserID;

    /**
     * Gets or sets the workflow group identifier.
     */
    @JsonProperty(value = "WorkflowGroupID")
    private Integer workflowGroupID;

    /**
     * Gets or sets the operation. Possible values include: 'None', 'Update',
     * 'Reset', 'Override', 'Null'.
     */
    @JsonProperty(value = "Operation")
    private String operation;

    /**
     * Gets or sets the category. Possible values include: 'None', 'Direct',
     * 'AdHoc', 'Production', 'Review', 'Reset', 'RoutingSlip',
     * 'ReviewRoutingSlip', 'Override'.
     */
    @JsonProperty(value = "Category")
    private String category;

    /**
     * Gets or sets the status. Possible values include: 'None', 'Approved',
     * 'Rejected', 'Suspended', 'ApprovedR', 'NoneR'.
     */
    @JsonProperty(value = "Status")
    private String status;

    /**
     * Gets or sets the state. Possible values include: 'None', 'Processed',
     * 'Pending', 'Waiting', 'ProcessedR', 'Override', 'OverrideR', 'WaitingR'.
     */
    @JsonProperty(value = "State")
    private String state;

    /**
     * Gets or sets the minimum index 1.
     */
    @JsonProperty(value = "MinIndex1")
    private Integer minIndex1;

    /**
     * Gets or sets the maximum index 1.
     */
    @JsonProperty(value = "MaxIndex1")
    private Integer maxIndex1;

    /**
     * Gets or sets the minimum index 2.
     */
    @JsonProperty(value = "MinIndex2")
    private Integer minIndex2;

    /**
     * Gets or sets the maximum index 2.
     */
    @JsonProperty(value = "MaxIndex2")
    private Integer maxIndex2;

    /**
     * Gets or sets the page number.
     */
    @JsonProperty(value = "Page")
    private Integer page;

    /**
     * Gets or sets the size of the page.
     */
    @JsonProperty(value = "PageSize")
    private Integer pageSize;

    /**
     * Gets or sets the order. Possible values include: 'Unspecified',
     * 'Ascending', 'Descending'.
     */
    @JsonProperty(value = "SortOrder")
    private String sortOrder;

    /**
     * Gets or sets the column to order by. Possible values include: 'ID',
     * 'Type', 'QueueID', 'WorkflowTime', 'InsertionTime', 'Index'.
     */
    @JsonProperty(value = "SortBy")
    private String sortBy;

    /**
     * Get the drawerID value.
     *
     * @return the drawerID value
     */
    public int drawerID() {
        return this.drawerID;
    }

    /**
     * Set the drawerID value.
     *
     * @param drawerID the drawerID value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withDrawerID(int drawerID) {
        this.drawerID = drawerID;
        return this;
    }

    /**
     * Get the entityID value.
     *
     * @return the entityID value
     */
    public int entityID() {
        return this.entityID;
    }

    /**
     * Set the entityID value.
     *
     * @param entityID the entityID value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withEntityID(int entityID) {
        this.entityID = entityID;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public String type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withType(String type) {
        this.type = type;
        return this;
    }

    /**
     * Get the queueID value.
     *
     * @return the queueID value
     */
    public Integer queueID() {
        return this.queueID;
    }

    /**
     * Set the queueID value.
     *
     * @param queueID the queueID value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withQueueID(Integer queueID) {
        this.queueID = queueID;
        return this;
    }

    /**
     * Get the minWorkflowTime value.
     *
     * @return the minWorkflowTime value
     */
    public DateTime minWorkflowTime() {
        return this.minWorkflowTime;
    }

    /**
     * Set the minWorkflowTime value.
     *
     * @param minWorkflowTime the minWorkflowTime value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMinWorkflowTime(DateTime minWorkflowTime) {
        this.minWorkflowTime = minWorkflowTime;
        return this;
    }

    /**
     * Get the maxWorkflowTime value.
     *
     * @return the maxWorkflowTime value
     */
    public DateTime maxWorkflowTime() {
        return this.maxWorkflowTime;
    }

    /**
     * Set the maxWorkflowTime value.
     *
     * @param maxWorkflowTime the maxWorkflowTime value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMaxWorkflowTime(DateTime maxWorkflowTime) {
        this.maxWorkflowTime = maxWorkflowTime;
        return this;
    }

    /**
     * Get the minInsertionTime value.
     *
     * @return the minInsertionTime value
     */
    public DateTime minInsertionTime() {
        return this.minInsertionTime;
    }

    /**
     * Set the minInsertionTime value.
     *
     * @param minInsertionTime the minInsertionTime value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMinInsertionTime(DateTime minInsertionTime) {
        this.minInsertionTime = minInsertionTime;
        return this;
    }

    /**
     * Get the maxInsertionTime value.
     *
     * @return the maxInsertionTime value
     */
    public DateTime maxInsertionTime() {
        return this.maxInsertionTime;
    }

    /**
     * Set the maxInsertionTime value.
     *
     * @param maxInsertionTime the maxInsertionTime value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMaxInsertionTime(DateTime maxInsertionTime) {
        this.maxInsertionTime = maxInsertionTime;
        return this;
    }

    /**
     * Get the workflowUserID value.
     *
     * @return the workflowUserID value
     */
    public Integer workflowUserID() {
        return this.workflowUserID;
    }

    /**
     * Set the workflowUserID value.
     *
     * @param workflowUserID the workflowUserID value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withWorkflowUserID(Integer workflowUserID) {
        this.workflowUserID = workflowUserID;
        return this;
    }

    /**
     * Get the workflowGroupID value.
     *
     * @return the workflowGroupID value
     */
    public Integer workflowGroupID() {
        return this.workflowGroupID;
    }

    /**
     * Set the workflowGroupID value.
     *
     * @param workflowGroupID the workflowGroupID value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withWorkflowGroupID(Integer workflowGroupID) {
        this.workflowGroupID = workflowGroupID;
        return this;
    }

    /**
     * Get the operation value.
     *
     * @return the operation value
     */
    public String operation() {
        return this.operation;
    }

    /**
     * Set the operation value.
     *
     * @param operation the operation value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withOperation(String operation) {
        this.operation = operation;
        return this;
    }

    /**
     * Get the category value.
     *
     * @return the category value
     */
    public String category() {
        return this.category;
    }

    /**
     * Set the category value.
     *
     * @param category the category value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withCategory(String category) {
        this.category = category;
        return this;
    }

    /**
     * Get the status value.
     *
     * @return the status value
     */
    public String status() {
        return this.status;
    }

    /**
     * Set the status value.
     *
     * @param status the status value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withStatus(String status) {
        this.status = status;
        return this;
    }

    /**
     * Get the state value.
     *
     * @return the state value
     */
    public String state() {
        return this.state;
    }

    /**
     * Set the state value.
     *
     * @param state the state value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withState(String state) {
        this.state = state;
        return this;
    }

    /**
     * Get the minIndex1 value.
     *
     * @return the minIndex1 value
     */
    public Integer minIndex1() {
        return this.minIndex1;
    }

    /**
     * Set the minIndex1 value.
     *
     * @param minIndex1 the minIndex1 value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMinIndex1(Integer minIndex1) {
        this.minIndex1 = minIndex1;
        return this;
    }

    /**
     * Get the maxIndex1 value.
     *
     * @return the maxIndex1 value
     */
    public Integer maxIndex1() {
        return this.maxIndex1;
    }

    /**
     * Set the maxIndex1 value.
     *
     * @param maxIndex1 the maxIndex1 value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMaxIndex1(Integer maxIndex1) {
        this.maxIndex1 = maxIndex1;
        return this;
    }

    /**
     * Get the minIndex2 value.
     *
     * @return the minIndex2 value
     */
    public Integer minIndex2() {
        return this.minIndex2;
    }

    /**
     * Set the minIndex2 value.
     *
     * @param minIndex2 the minIndex2 value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMinIndex2(Integer minIndex2) {
        this.minIndex2 = minIndex2;
        return this;
    }

    /**
     * Get the maxIndex2 value.
     *
     * @return the maxIndex2 value
     */
    public Integer maxIndex2() {
        return this.maxIndex2;
    }

    /**
     * Set the maxIndex2 value.
     *
     * @param maxIndex2 the maxIndex2 value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withMaxIndex2(Integer maxIndex2) {
        this.maxIndex2 = maxIndex2;
        return this;
    }

    /**
     * Get the page value.
     *
     * @return the page value
     */
    public Integer page() {
        return this.page;
    }

    /**
     * Set the page value.
     *
     * @param page the page value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withPage(Integer page) {
        this.page = page;
        return this;
    }

    /**
     * Get the pageSize value.
     *
     * @return the pageSize value
     */
    public Integer pageSize() {
        return this.pageSize;
    }

    /**
     * Set the pageSize value.
     *
     * @param pageSize the pageSize value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }

    /**
     * Get the sortOrder value.
     *
     * @return the sortOrder value
     */
    public String sortOrder() {
        return this.sortOrder;
    }

    /**
     * Set the sortOrder value.
     *
     * @param sortOrder the sortOrder value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withSortOrder(String sortOrder) {
        this.sortOrder = sortOrder;
        return this;
    }

    /**
     * Get the sortBy value.
     *
     * @return the sortBy value
     */
    public String sortBy() {
        return this.sortBy;
    }

    /**
     * Set the sortBy value.
     *
     * @param sortBy the sortBy value to set
     * @return the GetFlowRequestModel object itself.
     */
    public GetFlowRequestModel withSortBy(String sortBy) {
        this.sortBy = sortBy;
        return this;
    }

}
