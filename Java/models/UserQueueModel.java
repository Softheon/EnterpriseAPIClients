/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The model that is sent in response to a GET request for UserQueue
 * associations.
 */
public class UserQueueModel {
    /**
     * Gets or sets the user identifier.
     */
    @JsonProperty(value = "UserID")
    private Integer userID;

    /**
     * Gets or sets the full name of the user.
     */
    @JsonProperty(value = "UserFullName")
    private String userFullName;

    /**
     * Gets or sets the queue identifier.
     */
    @JsonProperty(value = "QueueID")
    private Integer queueID;

    /**
     * Gets or sets the name of the queue.
     */
    @JsonProperty(value = "QueueName")
    private String queueName;

    /**
     * Gets or sets the access control level permissions.
     */
    @JsonProperty(value = "Acl")
    private Integer acl;

    /**
     * Get the userID value.
     *
     * @return the userID value
     */
    public Integer userID() {
        return this.userID;
    }

    /**
     * Set the userID value.
     *
     * @param userID the userID value to set
     * @return the UserQueueModel object itself.
     */
    public UserQueueModel withUserID(Integer userID) {
        this.userID = userID;
        return this;
    }

    /**
     * Get the userFullName value.
     *
     * @return the userFullName value
     */
    public String userFullName() {
        return this.userFullName;
    }

    /**
     * Set the userFullName value.
     *
     * @param userFullName the userFullName value to set
     * @return the UserQueueModel object itself.
     */
    public UserQueueModel withUserFullName(String userFullName) {
        this.userFullName = userFullName;
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
     * @return the UserQueueModel object itself.
     */
    public UserQueueModel withQueueID(Integer queueID) {
        this.queueID = queueID;
        return this;
    }

    /**
     * Get the queueName value.
     *
     * @return the queueName value
     */
    public String queueName() {
        return this.queueName;
    }

    /**
     * Set the queueName value.
     *
     * @param queueName the queueName value to set
     * @return the UserQueueModel object itself.
     */
    public UserQueueModel withQueueName(String queueName) {
        this.queueName = queueName;
        return this;
    }

    /**
     * Get the acl value.
     *
     * @return the acl value
     */
    public Integer acl() {
        return this.acl;
    }

    /**
     * Set the acl value.
     *
     * @param acl the acl value to set
     * @return the UserQueueModel object itself.
     */
    public UserQueueModel withAcl(Integer acl) {
        this.acl = acl;
        return this;
    }

}